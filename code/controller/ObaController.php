<?php
require_once('./vendor/routes.php');

class ObaController extends BaseController {
  public function action() {
    // テンプレートインスタンスの生成
    $oba = new Template('oba');
    // 埋め込む値をセット
    $oba->setTemplateKeyValue('obavar', Routes::getOneQuery('obavar'));
    // 出力
    $oba->outputTemplate();
  }
}