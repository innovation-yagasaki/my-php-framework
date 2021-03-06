<?php
require_once('./model/Users.php');

class ObachanController extends DatabaseController {
  /**
   * ページを表示
   */
  public function show() {
    // allメソッド
    // $all_user = Users::all();
    // var_dump($all_user);

    // findメソッド(単数指定)
    // $find_user = Users::find(7);
    // var_dump($find_user);

    // findメソッド(複数指定)
    // $find_user_array = Users::find([7,8,9]);
    // var_dump($find_user_array);

    // update
    // $first_user = Users::find(7);
    // $first_user->name = 'upupup';
    // $first_user->password = 'upupup';
    // $first_user->save();
    // var_dump(Users::find(100));

    // insert
    // $insert = new Users();
    // $insert->name = 'taro';
    // $insert->password = '01010';
    // $insert->save();

    // delete
    // $delete = Users::find(32);
    // $delete->delete();

    // テンプレートインスタンスの生成
    $obachan = new Template('obachan');

    // ビューの表示
    $obachan->outputTemplate();
  }

  /**
   * とりあえずバリデーションする
   */
  public function create(Request $request) {
    $request->validate(
      [
        'name' => ['string', 'min:1', 'max:20'],
        'age' => ['number', 'require', 'min:0', 'max:130'],
        'address' => ['string', 'require'],
      ],
      'obachan'
    );
  }
}
