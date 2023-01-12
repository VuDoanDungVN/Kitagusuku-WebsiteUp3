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
      <section class="form login">
        <header>ログイン</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>メール：</label>
            <input type="text" name="email" placeholder="メールを記入してください" required>
          </div>
          <div class="field input">
            <label>パスワード:</label>
            <input type="password" name="password" placeholder="パスワードを記入してくださ" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="ログイン">
          </div>
        </form>
        <div class="link signup-text">まだOCCに登録されていない? <a href="index.php">サインインする</a></div>
      </section>
    </div>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>

</html>