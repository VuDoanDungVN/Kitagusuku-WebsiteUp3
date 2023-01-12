<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: home.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="main-chat">
    <div class="wrapper">
      <section class="form signup">
        <header>OCCにサインインする</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field input">
              <label>（姓) :</label>
              <input type="text" name="fname" placeholder="(例)楽天" required>
            </div>
            <div class="field input">
              <label>(名) :</label>
              <input type="text" name="lname" placeholder="(例)太郎" required>
            </div>
          </div>
          <div class="field input">
            <label>メール :</label>
            <input type="text" name="email" placeholder="メールを記入してください" required>
          </div>
          <div class="field input">
            <label>パスワード :</label>
            <input type="password" name="password" placeholder="パスワードを記入してください" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>写真を選んでください</label>
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="アカウン登録">
          </div>
        </form>
        <div class="link">アカウント登録されていますか？ <a href="login.php">ログイン</a></div>
      </section>
    </div>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>