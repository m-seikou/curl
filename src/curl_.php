<?php

class curl_
{
    /** @var resource */
    private $ch;

    private $returnTransfer = false;

    private $response = '';

    public function __construct($url)
    {
        $this->ch = curl_init($url);
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }

    public function exec()
    {
        $this->response = curl_exec($this->ch);
        if ($this->response === false) {
            return false;
        }
        return true;
    }

    public function setAutoReferer(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_AUTOREFERER, $val);
        return $this;
    }

    public function setBinaryTransfer(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_BINARYTRANSFER, $val);
        return $this;
    }

    public function setCookieSession(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_COOKIESESSION, $val);
        return $this;
    }

    public function setCertInfo(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_CERTINFO, $val);
        return $this;
    }

    public function setConnectOnly(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_CONNECT_ONLY, $val);
        return $this;
    }

    public function setCrlf(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_CRLF, $val);
        return $this;
    }

    public function setDNSUseGlobalCache(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_DNS_USE_GLOBAL_CACHE, $val);
        return $this;
    }

    public function setFailOneError(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FAILONERROR, $val);
        return $this;
    }

    public function setSSLFalseStart(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_FALSESTART, $val);
        return $this;
    }

    public function setFileTime(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FILETIME, $val);
        return $this;
    }

    public function setFollowLocation(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $val);
        return $this;
    }

    public function setForbidReuse(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FORBID_REUSE, $val);
        return $this;
    }

    public function setFreshConnect(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FRESH_CONNECT, $val);
        return $this;
    }

    public function setFTPUseEPRT(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FTP_USE_EPRT, $val);
        return $this;
    }

    public function setFTPUseEPSV(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FTP_USE_EPSV, $val);
        return $this;
    }

    public function setFTPAppend(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FTPAPPEND, $val);
        return $this;
    }

    public function setTCPNodelay(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_TCP_NODELAY, $val);
        return $this;
    }

    public function setFTPAscii(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FTPASCII, $val);
        return $this;
    }

    public function setFTPListOnly(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_FTPLISTONLY, $val);
        return $this;
    }

    public function setHeader(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_HEADER, $val);
        return $this;
    }

    public function setHeaderOut(Boolean $val)
    {
        curl_setopt($this->ch, CURLINFO_HEADER_OUT, $val);
        return $this;
    }

    public function setHttpGet(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTPGET, $val);
        return $this;
    }

    public function setHttpProxyTunnel(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTPPROXYTUNNEL, $val);
        return $this;
    }

    public function setMute(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_MUTE, $val);
        return $this;
    }

    public function setNetRC(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_NETRC, $val);
        return $this;
    }

    public function setNobody(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_NOBODY, $val);
        return $this;
    }

    public function setNoProgress(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_NOPROGRESS, $val);
        return $this;
    }

    public function setNoSignal(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_NOSIGNAL, $val);
        return $this;
    }

    public function setPathAsIs(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_PATH_AS_IS, $val);
        return $this;
    }

    public function setPipeWait(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_PIPEWAIT, $val);
        return $this;
    }

    public function setPost(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_POST, $val);
        return $this;
    }

    public function setPut(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_PUT, $val);
        return $this;
    }

    public function setReturnTransfer(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, $val);
        $this->returnTransfer = $val;
        return $this;
    }

    public function setSafeUpload(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SAFE_UPLOAD, $val);
        return $this;
    }

    public function setSaleIR(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SASL_IR, $val);
        return $this;
    }

    public function setSslEnableALPN(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_ENABLE_ALPN, $val);
        return $this;
    }

    public function setSslEnableNPN(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_ENABLE_NPN, $val);
        return $this;
    }

    public function setSslVerifyPeer(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, $val);
        return $this;
    }

    public function setSslVerifyStatus(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYSTATUS, $val);
        return $this;
    }
// enable php-7.0.7
//    public function setTcpFastOpen(Boolean $val)
//    {
//        curl_setopt($this->ch, CURLOPT_TCP_FASTOPEN, $val);
//        return $this;
//    }

// enable php-7.0.7
//    public function setTftpNoPotions(Boolean $val)
//    {
//        curl_setopt($this->ch, CURLOPT_TFTP_NO_OPTIONS, $val);
//        return $this;
//    }

    public function setTransferText(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_TRANSFERTEXT, $val);
        return $this;
    }

    public function setUnrestrictedAuth(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_UNRESTRICTED_AUTH, $val);
        return $this;
    }

    public function setUpload(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_UPLOAD, $val);
        return $this;
    }

    public function setVerbose(Boolean $val)
    {
        curl_setopt($this->ch, CURLOPT_VERBOSE, $val);
        return $this;
    }

    public function setBufferSize(int $val)
    {
        curl_setopt($this->ch, CURLOPT_BUFFERSIZE, $val);
        return $this;
    }

    public function setConnectionTimeout(int $val)
    {
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, $val);
        return $this;
    }

    public function setConnectionTimeoutMs(int $val)
    {
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT_MS, $val);
        return $this;
    }

    public function setDNSCacheTimeout(int $val)
    {
        curl_setopt($this->ch, CURLOPT_DNS_CACHE_TIMEOUT, $val);
        return $this;
    }

    public function setExpect100TimeoutMs(int $val)
    {
        curl_setopt($this->ch, CURLOPT_EXPECT_100_TIMEOUT_MS, $val);
        return $this;
    }

    public function setFTPSslAuth(int $val)
    {
        curl_setopt($this->ch, CURLOPT_FTPSSLAUTH, $val);
        return $this;
    }

    public function setHeaderOpt(int $val)
    {
        curl_setopt($this->ch, CURLOPT_HEADEROPT, $val);
        return $this;
    }

    public function setHttpVersion(int $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, $val);
        return $this;
    }

    public function setHttpAuth(int $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, $val);
        return $this;
    }

    public function setInFileSize(int $val)
    {
        curl_setopt($this->ch, CURLOPT_INFILESIZE, $val);
        return $this;
    }

    public function setLowSpeedLimit(int $val)
    {
        curl_setopt($this->ch, CURLOPT_LOW_SPEED_LIMIT, $val);
        return $this;
    }

    public function setLowSpeedTime(int $val)
    {
        curl_setopt($this->ch, CURLOPT_LOW_SPEED_TIME, $val);
        return $this;
    }

    public function setMaxConnects(int $val)
    {
        curl_setopt($this->ch, CURLOPT_MAXCONNECTS, $val);
        return $this;
    }

    public function setMaxRedirs(int $val)
    {
        curl_setopt($this->ch, CURLOPT_MAXREDIRS, $val);
        return $this;
    }

    public function setPort(int $val)
    {
        curl_setopt($this->ch, CURLOPT_PORT, $val);
        return $this;
    }

    public function setPostRedir(int $val)
    {
        curl_setopt($this->ch, CURLOPT_POSTREDIR, $val);
        return $this;
    }

    public function setProtocols(int $val)
    {
        curl_setopt($this->ch, CURLOPT_PROTOCOLS, $val);
        return $this;
    }

    public function setProxyAuth(int $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXYAUTH, $val);
        return $this;
    }

    public function setProxyPort(int $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXYPORT, $val);
        return $this;
    }

    public function setProxyType(int $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXYTYPE, $val);
        return $this;
    }

    public function setRedirProtocols(int $val)
    {
        curl_setopt($this->ch, CURLOPT_REDIR_PROTOCOLS, $val);
        return $this;
    }

    public function setResumeFrom(int $val)
    {
        curl_setopt($this->ch, CURLOPT_RESUME_FROM, $val);
        return $this;
    }
// enable php-7.0.7
//    public function setSslOptions(int $val)
//    {
//        curl_setopt($this->ch, CURLOPT_SSL_OPTIONS, $val);
//        return $this;
//    }

    public function setSslVerifyHost(int $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, $val);
        return $this;
    }

    public function setSslVersion(int $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLVERSION, $val);
        return $this;
    }

// enable php-7.0.7
//    public function setStreamWeight(int $val)
//    {
//        curl_setopt($this->ch, CURLOPT_STREAM_WEIGHT, $val);
//        return $this;
//    }

    public function setTimeCondition(int $val)
    {
        curl_setopt($this->ch, CURLOPT_TIMECONDITION, $val);
        return $this;
    }

    public function setTimeout(int $val)
    {
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $val);
        return $this;
    }

    public function setTimeoutMs(int $val)
    {
        curl_setopt($this->ch, CURLOPT_TIMEOUT_MS, $val);
        return $this;
    }

    public function setTimeValue(int $val)
    {
        curl_setopt($this->ch, CURLOPT_TIMEVALUE, $val);
        return $this;
    }

    public function setMaxRecvSpeedLarge(int $val)
    {
        curl_setopt($this->ch, CURLOPT_MAX_RECV_SPEED_LARGE, $val);
        return $this;
    }

    public function setMaxSendSpeedLarge(int $val)
    {
        curl_setopt($this->ch, CURLOPT_MAX_SEND_SPEED_LARGE, $val);
        return $this;
    }

    public function setSshAuthType(int $val)
    {
        curl_setopt($this->ch, CURLOPT_SSH_AUTH_TYPES, $val);
        return $this;
    }

    public function setIpResolve(int $val)
    {
        curl_setopt($this->ch, CURLOPT_IPRESOLVE, $val);
        return $this;
    }

    public function setFTPFileMethod(int $val)
    {
        curl_setopt($this->ch, CURLOPT_FTP_FILEMETHOD, $val);
        return $this;
    }

    public function setCAInfo(String $val)
    {
        curl_setopt($this->ch, CURLOPT_CAINFO, $val);
        return $this;
    }

    public function setCAPath(String $val)
    {
        curl_setopt($this->ch, CURLOPT_CAPATH, $val);
        return $this;
    }

    public function setCookie(String $val)
    {
        curl_setopt($this->ch, CURLOPT_COOKIE, $val);
        return $this;
    }

    public function setCookieFile(String $val)
    {
        curl_setopt($this->ch, CURLOPT_COOKIEFILE, $val);
        return $this;
    }

    public function setCookieJar(String $val)
    {
        curl_setopt($this->ch, CURLOPT_COOKIEJAR, $val);
        return $this;
    }

    public function setCustomRequest(String $val)
    {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $val);
        return $this;
    }

// enable php-7.0.7
//    public function setDefaultProtocol(String $val)
//    {
//        curl_setopt($this->ch, CURLOPT_DEFAULT_PROTOCOL, $val);
//        return $this;
//    }

    public function setDNSInterface(String $val)
    {
        curl_setopt($this->ch, CURLOPT_DNS_INTERFACE, $val);
        return $this;
    }

    public function setDNSLocalIp4(String $val)
    {
        curl_setopt($this->ch, CURLOPT_DNS_LOCAL_IP4, $val);
        return $this;
    }

    public function setDNSLocalIp6(String $val)
    {
        curl_setopt($this->ch, CURLOPT_DNS_LOCAL_IP6, $val);
        return $this;
    }

    public function setEGDSocket(String $val)
    {
        curl_setopt($this->ch, CURLOPT_EGDSOCKET, $val);
        return $this;
    }

    public function setEncoding(String $val)
    {
        curl_setopt($this->ch, CURLOPT_ENCODING, $val);
        return $this;
    }

    public function setFTPPort(String $val)
    {
        curl_setopt($this->ch, CURLOPT_FTPPORT, $val);
        return $this;
    }

    public function setInterface(String $val)
    {
        curl_setopt($this->ch, CURLOPT_INTERFACE, $val);
        return $this;
    }

    public function setKeyPasswd(String $val)
    {
        curl_setopt($this->ch, CURLOPT_KEYPASSWD, $val);
        return $this;
    }

    public function setKRB4Level(String $val)
    {
        curl_setopt($this->ch, CURLOPT_KRB4LEVEL, $val);
        return $this;
    }

    public function setLoginOption(String $val)
    {
        curl_setopt($this->ch, CURLOPT_LOGIN_OPTIONS, $val);
        return $this;
    }

    public function setPinnedPublicKey(String $val)
    {
        curl_setopt($this->ch, CURLOPT_PINNEDPUBLICKEY, $val);
        return $this;
    }

    public function setPostFiled(String $val)
    {
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $val);
        return $this;
    }

    public function setPrivate(String $val)
    {
        curl_setopt($this->ch, CURLOPT_PRIVATE, $val);
        return $this;
    }

    public function setProxy(String $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXY, $val);
        return $this;
    }

    public function setProxyServiceName(String $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXY_SERVICE_NAME, $val);
        return $this;
    }

    public function setProxyUserPW(String $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXYUSERPWD, $val);
        return $this;
    }

    public function setRandomFile(String $val)
    {
        curl_setopt($this->ch, CURLOPT_RANDOM_FILE, $val);
        return $this;
    }

    public function setRange(String $val)
    {
        curl_setopt($this->ch, CURLOPT_RANGE, $val);
        return $this;
    }

    public function setReferer(String $val)
    {
        curl_setopt($this->ch, CURLOPT_REFERER, $val);
        return $this;
    }

    public function setServiceName(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SERVICE_NAME, $val);
        return $this;
    }

    public function setSshHostPublicKeyMD5(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSH_HOST_PUBLIC_KEY_MD5, $val);
        return $this;
    }

    public function setSshPublicKeyFile(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSH_PUBLIC_KEYFILE, $val);
        return $this;
    }

    public function setSshPrivateKeyFile(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSH_PRIVATE_KEYFILE, $val);
        return $this;
    }

    public function setSslCipherList(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSL_CIPHER_LIST, $val);
        return $this;
    }

    public function setSslCert(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLCERT, $val);
        return $this;
    }

    public function setSslCertPasswd(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLCERTPASSWD, $val);
        return $this;
    }

    public function setSslCertType(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLCERTTYPE, $val);
        return $this;
    }

    public function setSslEngine(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLENGINE, $val);
        return $this;
    }

    public function setSslEngineDefault(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLENGINE_DEFAULT, $val);
        return $this;
    }

    public function setSslKey(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLKEY, $val);
        return $this;
    }

    public function setSslKeyPasswd(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLKEYPASSWD, $val);
        return $this;
    }

    public function setSslKeyType(String $val)
    {
        curl_setopt($this->ch, CURLOPT_SSLKEYTYPE, $val);
        return $this;
    }

    public function setUnixSocketPath(String $val)
    {
        curl_setopt($this->ch, CURLOPT_UNIX_SOCKET_PATH, $val);
        return $this;
    }

    public function setUrl(String $val)
    {
        curl_setopt($this->ch, CURLOPT_URL, $val);
        return $this;
    }

    public function setUserAgent(String $val)
    {
        curl_setopt($this->ch, CURLOPT_USERAGENT, $val);
        return $this;
    }

    public function setUserName(String $val)
    {
        curl_setopt($this->ch, CURLOPT_USERNAME, $val);
        return $this;
    }

    public function setUserPw(String $val)
    {
        curl_setopt($this->ch, CURLOPT_USERPWD, $val);
        return $this;
    }

    public function setXoAuth2Bearer(String $val)
    {
        curl_setopt($this->ch, CURLOPT_XOAUTH2_BEARER, $val);
        return $this;
    }

// enable php-7.0.7
//    public function setConnectTo(array $val)
//    {
//        curl_setopt($this->ch, CURLOPT_CONNECT_TO, $val);
//        return $this;
//    }

    public function setConnectTo(array $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTP200ALIASES, $val);
        return $this;
    }

    public function setHttpHeader(array $val)
    {
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $val);
        return $this;
    }

    public function setPostQuote(array $val)
    {
        curl_setopt($this->ch, CURLOPT_POSTQUOTE, $val);
        return $this;
    }

    public function setProxyHeader(array $val)
    {
        curl_setopt($this->ch, CURLOPT_PROXYHEADER, $val);
        return $this;
    }

    public function setQuote(array $val)
    {
        curl_setopt($this->ch, CURLOPT_QUOTE, $val);
        return $this;
    }

    public function setFile($val)
    {
        curl_setopt($this->ch, CURLOPT_FILE, $val);
        return $this;
    }

    public function setInFile($val)
    {
        curl_setopt($this->ch, CURLOPT_INFILE, $val);
        return $this;
    }

    public function setStdErr($val)
    {
        curl_setopt($this->ch, CURLOPT_STDERR, $val);
        return $this;
    }

    public function setWriteHeader($val)
    {
        curl_setopt($this->ch, CURLOPT_WRITEHEADER, $val);
        return $this;
    }

    public function setHeaderFunction(callable $val)
    {
        curl_setopt($this->ch, CURLOPT_HEADERFUNCTION, $val);
        return $this;
    }

    public function setPasswdFunction(callable $val)
    {
        curl_setopt($this->ch, CURLOPT_PASSWDFUNCTION, $val);
        return $this;
    }

    public function setProgressFunction(callable $val)
    {
        curl_setopt($this->ch, CURLOPT_PROGRESSFUNCTION, $val);
        return $this;
    }

    public function setReadFunction(callable $val)
    {
        curl_setopt($this->ch, CURLOPT_READFUNCTION, $val);
        return $this;
    }

    public function setWriteFunction(callable $val)
    {
        curl_setopt($this->ch, CURLOPT_WRITEFUNCTION, $val);
        return $this;
    }

    public function reset()
    {
        curl_reset($this->ch);
    }

    public function version()
    {
        return curl_version();
    }
}