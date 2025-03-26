# Laravel 11 透過 API 服務提供者搜尋 Podcast 內容

引入 podcastcrawler 的 podcastcrawler 套件來擴增搜尋 Podcast 內容，Podcast 是「iPod」和「broadcast」的混合詞，是一種透過網路接收音訊的媒體，發布者將音訊、影片、電台等等以 RSS 訊息來源輸出形成列表，上傳網路發布，然後聽眾經由電子裝置收聽和下載串流的電子檔，從而接收其內容，Podcast 屬於「隨選隨聽」機制，結合 RSS feed 訂閱功能，有新集數上架時會出現在訂閱者的清單列表裡，用戶可以在列表中選取想聽的集數，不受播出時間影響，而且可下載離線收聽。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/podcast/search` 來進行搜尋 Podcast 內容。

----

## 畫面截圖
![](https://i.imgur.com/eFiNlsH.png)
> 進軍 Podcast 約兩年的百靈果，不僅單月收聽次數已破百萬，在 Apple Podcast 排行榜上也始終前幾名的常勝軍。死忠粉絲稱他們為「邪教教主」，其中一個原因，大概就是凱莉那充滿渲染力的笑聲
