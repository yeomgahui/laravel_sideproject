# 아래 도커 허브에서의 php fpm을 기본 이미지로 설정한다.
#nginx만으로는 동적인 페이지 구현이 어렵다. 웹서버의 역할은 정적인 html웹문서 파일을 
#웹브라우저에게 전송해주는 역할만 하기때문이다.
#동적인 처리를 위해서 웹서버 이외의 외부 프로그램에서 처리하는 방법을 사용한다. 웹서버에서 요청을 받아 그 요청을 외부 프로그램에 넘겨주면, 
#외부 프로그램은 프로그램 파일을 읽어 html로 변환하는 단계를 거치게 된다. 이것을 cgi라고 하고 우리가 설치할 php fpm 도 cgi에 해당한다.
#php-fpm는 뭔가요? PHP FastCGI Process Manager의 약자입니다.
#  FastCGI는 위에서 말한 CGI보다좀더 빠른 버전이라고 할 수 있습니다. CGI는 요청할때마다 새로운 프로세스 생성하여 구동하게 되는 데..
#  이렇게 되면 부하가 심할뿐만 느려지게 되어있습니다. 
# 하지만 FastCGI은 요청할때마다 새로운 프로세스 생성하는 것이 아니라 이미 생성한 프로세스를 재활용하는 방법을 사용합니다. 때문에 처리가 빠르다는 장점이 있습니다.
# apache의 경우에는 apache용 php 모듈이 있어서 자체적으로 처리하게 되어있습니다. 하지만 nginx에는 그런 모듈따윈 없습니다.
#  때문에 php-fpm를 따로 설치해서 nginx와 연동시켜야 합니다.

FROM php:7.4-fpm

# php 확장 모듈 설치하는 명령어 pdo, pdo_mysql을 설치한다.
RUN docker-php-ext-install pdo pdo_mysql