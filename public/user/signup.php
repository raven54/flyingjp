<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>FLYING JAPAN</title>
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="/js/ie-bootstrap-carousel.min.js"></script>
    <![endif]-->
</head>

<!-- 불러오기 / 삭제예정 -->

<body>
  <section id="wrapper" class="main-container">
    <? include "../header.html" ?>
    <div class="sign">
      <form class="sign-form" action="index.html" method="post">
        <div class="sign-top">
          <span class="sign-title">회원가입</span>
          <a href="http://raven5461.dothome.co.kr/about/partner.php"><span class="sign-subtitle">가이드 등록하기</span></a>
        </div>


        <div class="sign-box sign-id">
          <input type="text" placeholder="  이메일 주소" name="" value="">
          <span class="id-email">이미 사용중인 주소입니다.</span>
          <input type="text" placeholder="  비밀번호" name="" value="">
          <span class="id-email">비밀번호는 8자리 이상입니다.</span>
        </div>

        <div class="sign-box sign-check">
          <div>
            <input type="checkbox" name="" value="">
            <span>아래 내용에 모두 동의합니다.</span>
          </div>
          <div>
            <input type="checkbox" name="" value="">
            <span>[필수] 서비스 이용약관 동의</span>
            <a href="#">상세보기</a>
          </div>
          <div>
            <input type="checkbox" name="" value="">
            <span>[필수] 개인정보 수집·이용 동의</span>
            <a href="#">상세보기</a>
          </div>
          <div>
            <input type="checkbox" name="" value="">
            <span>[선택] 마케팅 정보수집 활용 동의</span>
            <a href="#">상세보기</a>
          </div>
        </div>

        <div class="sign-box sign-submit">
          <input type="submit" name="" class="email-join" value="이메일로 가입">
          <input type="submit" name="" class="facebook-join" value="페이스북으로 가입">
          <a href="http://raven5461.dothome.co.kr/user/signin.php" class="sign-text">로그인</a>
        </div>
      </form>
    </div>
  </section>
  <? include "../footer.html" ?>
</body>
