<?php

return [
    'alipay' => [
        'app_id'         => '2016091300504044',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxghlfWuKe3TJMjfA0NNMqymYxOJ9dtXIIKJC8L2SM0RfVYJZIiMtnS0a6AsrYkEIbYBlVm8RCCgfYj4kGIfoLwp6HiHAaQvLKEVwd20KWqU7E/NkNfPaXOYI5Nt6yzxvdlBJ0g0Dwf668845SUDUSFdZYJBmrAv+rxURqj8xMK5BJqgLw5fSUQNd2zDCV5iNl+14p4j/bq107/yKeIvl0fZ6UW7chS260XhCMK0R44D2KDttU2Me5K8BWIEcqzQMnVRm6w/COOijbz9y74+VpCiUWzB4DMQXVLceeefx6fmqEULT9bCDcl33xYZn9C/KDvOjZtTTdQ/ATOFtV7KcYQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAwTS8pytdwFgl52QGfhcYENMKV5vSSdkoAt1Bu4eVZimO+7FNnETy2F1/Q/sPTswhh7ckBG+48u4u5RqbbkvDU9IglZjEYidxuIxYDvbY9iNcvqM6cDygWHV8cMkP5uU426190wkWJKiJu3mcfo24n5qGAUupGlkBjdCrFk18oaiptDQYHAzhtxU3zvwX0zm1JSyFEtR3h+Zd8/J8ZIzEnvc2ZtVerE7X5rpJ0T6+mBBe/RMte9Lw5DTJ5O7JLvNsaj5L6GQlJXbw5RYfxhbGYGwTwjvR9dDgMLs5dzz56OMwiZoneYLb/UvIoURr+BCrKl7MtAB9jmtCvXKASLVacwIDAQABAoIBAQCYDSH/ShDRRE4oSb8WUqR88SntgtM/jSiBAJIvvOel7ET77jDPMDASeZqj7JzCfcJRpZ8x4p8iiLLdWVBDwFpryC4erYi4WqSUAdd3h2t+Ypwl6B4goIXsuCGEPahHJdTWhjZE9Jy5ou4qXe38ZxqKeTjHIj1mX+/qJPPQbJEOQ2l7svrevNuO7xQ3DFtsIZhKNO8Yq8/CaC9oxdpcWNnIeOFa3WVxN84kikxdtnTfOh9RFdpOl/hhWpvlwSHYF+93Xhxp771vZ8qPNBSCs3QXXHq6nFXfua4H/HUONzTexOonnUS/yCouIlGcoqcV78XsYhhO00hcc8ERqz5D9ErpAoGBAOVElmCB5m+8tbpJmhwG5V2FRLO2tU7aBiWn401cxjFDQYoPV37GNRPuomZsl+tr7gusNR9bMWmZP1PPpl5fXBwPg5JuheOS6dqoGDzxr/kapfLpKaTZa5aAIG9p51NM5KdFEP1Pd61qfv9YBr2eDjENK/F10d4QmloshmpFn3SfAoGBANe7vP56CHRfFpYdQvWtAUlnw0fD1WFIBWgx039eKd0nO5VDUktBWPfj3C7v1nJB8Yq8nPo3gtg0lWmIoiTAKm7MeVZKh+4PyGpKFQg0oNIXzfhZxeP4HC1qK7tXj8wX7YRTkq2G1z/f4oXCMGUxPZZj27g2FC6I1tytMUbfDZWtAoGBAKKIzkbasH/Ue8z2Mu/dn6t+OCdjxwOAo0z8ybLlq4fvEz6KA9BXOffIfI86OzVmDZtu2TZCkzQ2tWN4WYyb9BPcl70u53Jfi7Q86PoDqWpjDvS3gZNho9lNOjFiFeHDKHLBDvtV5BUn46KoSBcTPyJdISMMEN1qTdLRr/UVKKcnAoGBAKGJmUXvuL7yqKX0+TuetPTzNn1ZPUDfvfS8QoL/zlcj1nC4/TkOkIDl5OxceHYLvMLG4sBVqqscDLj+L3NXVS6r+ztLCaePt+Em4cLILZfDbV5GUnCWSvsSofZg5XLMg/Ru48j9y9WvXh4MP1K2YUhoM5EnJUuG+WQ6Z0iLIs/tAoGACwjqA9s/h4i4jdPCmMXaK0+SqSWFBcC71FzL0kmIRvL/rNMCrr1heT81gPW9bh2Y+XBk3Jc3Z7ttwJ2PasNk1eVUHD1MyhVVYUdqbz61uAEKmSFFN6agMbVCCpGTIQiK8tcL2pJJ8+icfRq4i289U3Jq2AZTUCOrxfMRNwnn0sw=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];