<?php

namespace App\Providers;

use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Yansongda\Pay\Pay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 后续看是否可以把 这两者整合起来
        // 往服务容器中注入一个名为 alipay 的单例对象
        $this->app->singleton('alipay', function () {
            $config = config('pay');
            $config['alipay']['default']['notify_url'] = ngrok_url('payment.alipay.notify');
            $config['alipay']['default']['return_url'] = route('payment.alipay.return');
            // 判断当前项目运行环境是否为线上环境
            if (app()->environment() !== 'production') {
                $config['mode']         = 'dev';
                $config['logger']['level'] = Logger::DEBUG;
            } else {
                $config['logger']['level'] = Logger::WARNING;
            }
            $config['logger']['file'] = storage_path('logs/alipay.log');
            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
            return Pay::alipay($config);
        });

        $this->app->singleton('wechat_pay', function () {
            $config = config('pay');
            $config['wechat']['default']['notify_url'] = ngrok_url('payment.wechat.notify');
            if (app()->environment() !== 'production') {
                $config['logger']['level'] = Logger::DEBUG;
            } else {
                $config['logger']['level'] = Logger::WARNING;
            }
            $config['logger']['file'] = storage_path('logs/wechat_pay.log');
            // 调用 Yansongda\Pay 来创建一个微信支付对象
            return Pay::wechat($config);
        });

        // 注册一个名为 es 的单例
        $this->app->singleton('es', function () {
            // 从配置文件读取 Elasticsearch 服务器列表
            $builder = ClientBuilder::create()
                ->setHosts(config('database.elasticsearch.hosts'))
//                ->setCABundle(resource_path('cert/http_ca.crt'))
                ;
            // 如果是开发环境
            if (app()->environment() === 'local') {
                // 配置日志，Elasticsearch 的请求和返回数据将打印到日志文件中，方便我们调试
                $builder->setLogger(app('log')->driver());
            }

            return $builder->build();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Pagination\Paginator::useBootstrap();

    }
}
