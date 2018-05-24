<?php
  //1. POSTデータ取得（）



  //2. DB接続します
  $pdo = new PDO('mysql:dbname=****;host=****','****','****');



  //2. DB文字コードを指定(固定)
  $stmt = $pdo->query('SET NAMES utf8');



  //３．データ登録SQL作成
  $stmt = $pdo->prepare("INSERT INTO **** (id, name, email, naiyou, indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
  $stmt->bindValue(':a1', ****);
  $stmt->bindValue(':a2', ****);
  $stmt->bindValue(':a3', ****);
  $status = $stmt->execute();


  //４．データ登録処理後
  if($status==false){
    //Errorの場合$status=falseとなり、エラー表示
    echo "SQLエラー";
    exit;
  }else{
    //５．index.phpへリダイレクト



  }
?>
