<?php
/**
 * Created by PhpStorm.
 * User: 745
 * Date: 2016/11/22
 * Time: 19:08
 */

namespace mihoshi\curl;


class Curl
{
    /** @var resource */
    private $ch;
    private $status;
    private $requestHeader = [];
    private $responseHeader = [];
    private $sendCookie = [];
    private $receiveCookie = [];

    private $responseBody = '';

    public function __construct($url)
    {
        $this->ch = curl_init($url);
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }

    public function addHeader($key, $value)
    {
        $this->requestHeader[$key] = $value;
        return $this;
    }

    public function addCookie($key, $value)
    {
        $this->sendCookie[$key] = $value;
        return $this;
    }

    private function setHeader()
    {
        $headers = [];
        foreach ($this->requestHeader as $key => $val) {
            $headers[] = $key . ': ' . urlencode($val);
        }
        if (!empty($this->sendCookie)) {
            $headers[] = 'cookie: ' . http_build_cookie($this->sendCookie);
        }
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
    }

    private function exec()
    {
        $this->setHeader();
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        //最大何回リダイレクトをたどるか
//        curl_setopt($this->ch, CURLOPT_MAXREDIRS, 10);
        //リダイレクトの際にヘッダのRefererを自動的に追加させる
//        curl_setopt($this->ch, CURLOPT_AUTOREFERER, true);
        $result = curl_exec($this->ch);
        $headerSize = curl_getinfo($this->ch, CURLINFO_HEADER_SIZE);
        $headers = explode("\r\n\r\n", trim(substr($result, 0, $headerSize)));
        $headers = array_pop($headers);
        $parsedHeader = [];

        foreach (explode("\r\n", $headers) as $header) {
            if (empty($header)) {
                continue;
            }
            // ステータス行は
            if (preg_match('/\AHTTP\/[\d.]* (\d\d\d)/i', $header, $code)) {
                $this->status = (int)$code[1];
                continue;
            }
            $pos = strpos($header, ':', 0);
            $parsedHeader[substr($header, 0, $pos)][] = trim(substr($header, $pos + 1));
        }
//        foreach ($parsedHeader as &$header) {
//            if (is_array($header) && count($header) == 1) {
//                $header = array_shift($header);
//            }
//        }
//        unset($header);
        $this->responseHeader = $parsedHeader;
        $this->responseBody = substr($result, $headerSize);
    }

    public function get()
    {
        $this->exec();
    }

    public function post(array $post)
    {
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($post));
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getHeader()
    {
        return $this->requestHeader;
    }

    public function getBody()
    {
        return $this->responseBody;
    }

    public function setBasicAuth(string $user, String $pass)
    {
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($this->ch, CURLOPT_USERPWD, $user . ":" . $pass);
        return $this;
    }

    public function setTimeout(int $time)
    {
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $time);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, $time);
    }

    public function setProxy(String $proxyHost, int $proxyPort = 80)
    {
        //プロキシ経由フラグ
        curl_setopt($this->ch, CURLOPT_HTTPPROXYTUNNEL, 1);
        curl_setopt($this->ch, CURLOPT_PROXY, $proxyHost);
        curl_setopt($this->ch, CURLOPT_PROXYPORT, $proxyPort);
        return $this;
    }

    public function setProxyAuth(string $user, String $pass)
    {
        curl_setopt($this->ch, CURLOPT_PROXYUSERPWD, $user . ":" . $pass);
        return $this;
    }

    public function setReferer(String $val)
    {
        curl_setopt($this->ch, CURLOPT_REFERER, $val);
        return $this;
    }

    public function setSslVerifyHost(int $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, $val);
        return $this;
    }

    public function setSslVerifyPeer(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, $val);
        return $this;
    }

    public function setEncoding(String $val)
    {
        curl_setopt($this->ch, CURLOPT_ENCODING, $val);
        return $this;
    }


}