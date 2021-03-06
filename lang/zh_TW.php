<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * zh_TW.php
 * Author     : hewro
 * Date       : 2017/4/29
 * Version    : 1.0
 * Description: English version
 */

class Lang_zh_TW extends Lang{
    /**
    * @return string 返回语言名称
    */
    public function name(){
        return "繁体中文";
    }

    /**
    * @return array 返回包含翻译文本的数组
    */
    public function translated(){
        return array(
            'zh-cmn-Hans' => 'zh-cmn-Hant',
            /*评论 Comments*/
            '暂无评论' => '暫無評論',
            '1 条评论' => '1 條評論',
            '%d 条评论' => '%d 條評論',
            '阅读: %d' => '閱讀: %d',
            '浏览' => '瀏覽',
            '早上好，' => '早上好，',
            '中午好，' => '中午好，',
            '晚上好，' => '晚上好，',
            '文章RSS' => '文章RSS',
            '评论RSS' => '評論RSS',
            '导航' => '導航',
            '首页' => '首頁',
            '组成' => '組成',
            '分类' => '分類',
            '页面' => '頁面',
            '友链' => '友鏈',
            '输入关键词搜索…' => '輸入關鍵詞搜索…',
            '闲言碎语' => '閒言碎語',
            '登录' => '登錄',
            '后台管理' => '後台管理',
            '退出' => '退出',
            '用户名' => '用戶名',
            '密码' => '密碼',
            '登录中' => '登錄中',
            '热门文章' => '熱門文章',
            '最新评论' => '最新評論',
            '随机文章' => '隨機文章',
            '评论详情' => '評論詳情',
            '详情' => '詳情',
            '随机文章' => '隨機文章',
            '分类' => '分類',
            '标签云' => '標籤雲',
            '文章目录' => '文章目錄',
            /* 时光机页面 */
            '我的动态' => '我的動態',
            '联系方式' => '聯繫方式',
            '外观设置——输入email地址' => '外觀設置——輸入email地址',
            '外观设置——输入QQ号码' => '外觀設置——輸入QQ號碼',
            '外观设置——输入微博ID' => '外觀設置——輸入微博ID',
            '外观设置——输入网易云音乐ID' => '外觀設置——輸入網易云音樂ID',
            '网易云音乐' => '網易云音樂',
            '关于我' => '關於我',
            'Y 年 m 月 d 日 h 时 i 分 A' => 'Y 年 m 月 d 日 h 時 i 分 A',
            '作者' => '作者',
            '返回首页' => '返回首頁',
            '没有找到搜索结果，请尝试更换关键词。' => '沒有找到搜索結果，請嘗試更換關鍵詞。',
            '正文' => "正文",
            '发表评论' => '發表評論',
            '评论' => '評論',
            '欢迎' => '歡迎',
            '归来' => '歸來',
            '名称' => '名稱',
            '邮箱' => '郵箱',
            '网址' => '網址',
            '姓名或昵称' => '姓名或暱稱',
            '网站或博客' => '網站或博客',
            '提交中' => '提交中',
            '此处评论已关闭' => '此處評論已關閉',
            '发表新鲜事' => '發表新鮮事',
            '欢迎你来到「时光机」栏目。在这里你可以记录你的日常和心情。而且，首页的“闲言碎语”栏目会显示最新的三条动态哦！这是默认的第一条说说，当你发布第一条说说的时候，该条动态会自动消失。' => '歡迎你來到「時光機」欄目。在這裡你可以記錄你的日常和心情。而且，首頁的“閒言碎語”欄目會顯示最新的三條動態哦！這是默認的第一條說說，當你發布第一條說說的時候，該條動態會自動消失。',
            '分享到' => '分享到',
            'QQ空间' => 'QQ空間',
            '微博' => '微博',
            '用户名或电子邮箱' => '用戶名或電子郵箱'
        );
    }

    /**
    * @return string 返回日期的格式化字符串
    */
    public function dateFormat(){
        return "Y-m-d";
    }
}
