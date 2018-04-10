<?php

namespace Behavior;
/**
 * 行为扩展：代理检测
 */
class AgentCheckBehavior {
    public function run(&$params) {
        // 代理访问检测
        $limitProxyVisit =  C('LIMIT_PROXY_VISIT',null,true);
        if($limitProxyVisit && ($_SERVER['HTTP_X_FORWARDED_FOR'] || $_SERVER['HTTP_VIA'] || $_SERVER['HTTP_PROXY_CONNECTION'] || $_SERVER['HTTP_USER_AGENT_VIA'])) {
            // 禁止代理访问
            exit('Access Denied');
        }
    }
}
