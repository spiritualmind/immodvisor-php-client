<?php

namespace Immodvisor\Helper;

class ImmodvisorHelper
{
    /**
     * Calculate checksum for immodvisor API calls. You can use it in your implement to calculate the checksum
     * for emetter and receiver.
     * Use ApiKey, salt_in and salt_out provided by your account manager at Immodvisor.
     *
     * @param string $apiKey
     * @param string $salt
     * @param array  $datas
     *
     * @return string
     */
    public static function checksum(string $apiKey, string $salt, array $datas = []): string
    {
        $checksum = $apiKey;
        foreach ($datas as $value) {
            if (is_array($value) || is_object($value)) {
                $value = json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            } elseif ($value === true) {
                $value = 1;
            } elseif ($value === false) {
                $value = 0;
            }
            $checksum .= $value;
        }
        $checksum .= $salt;

        return sha1($checksum);
    }
}
