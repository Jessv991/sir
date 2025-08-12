<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Clientes\ClienteController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\Models\EMPLTABLE;
use App\Models\NAT_SIR_LOGS;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public static function setRegistroEntrada($user, $latitud = 0, $longitud = 0, $idmenu = 0)
    {
        $userid = EMPLTABLE::getCodigoEmpleado($user);
        $ipAddress = LogController::getRealIpAddress();
        $substring = "192.168";
        if (($ipAddress != '80.38.218.109') && (strpos($ipAddress, $substring) === false)){
            $coordenadas = LogController::getCoordinates($ipAddress);
            $data = json_decode($coordenadas, true);
            $num_accesos = NAT_SIR_LOGS::accessionNumber($userid);

            if ($num_accesos < 10) {
                $result = NAT_SIR_LOGS::insert($userid, $data['latitude'], $data['longitude'], $idmenu, $ipAddress);
                if ($result) {
                    return $num_accesos;
                } else {
                    return false;
                }
            } else {
                $result =  NAT_SIR_LOGS::updateAcces($userid, $data['latitude'], $data['longitude'], $idmenu, $ipAddress);
                return $num_accesos;
            }
        }else{
            return false;
        }
    }

    public static function getRealIpAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // Check for the IP address from shared Internet connection
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // Check for the IP address from a proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            // Get the IP address directly
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public static function getCoordinates($ipAddress)
    {
        if ($ipAddress == '127.0.0.1') {
            return json_encode([
                'ip' => $ipAddress,
                'latitude' => '41.667584',
                'longitude' => '0.603482',
            ]);
        } else {
            $apiKey = '9cd7c678ea3bd6';
            $apiUrl = "http://ipinfo.io/" . $ipAddress . "?token=" . $apiKey;

            $client = new Client();
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            if (!isset($data['loc'])) {
                $latitude = $data['loc'] ? explode(',', $data['loc'])[0] : null;
                $longitude = $data['loc'] ? explode(',', $data['loc'])[1] : null;
                return json_encode([
                    'ip' => $ipAddress,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                ]);
            } else {
                return json_encode([
                    'ip' => $ipAddress,
                    'latitude' => '41.667584',
                    'longitude' => '0.603482',
                ]);
            }
        }
    }
}
