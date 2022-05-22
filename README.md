# 워드프레스 inflearn 공부하기

1. Post Type
    - 'post' : 글 누적됨
    - 'page' : 페이지 - 한 번 써두고 변하지 않음. 소개 같은 것
    - 'attachment' : 첨부 파일
    - 'revision' : post, page의 과거 버전 기록
    - 'nav_menu_item' : 외모 (Appearance) 의 메뉴(Menu)에서 생성한 메뉴 항목
        
    일단 워드프레스 같은 경우에는 wp_post에 글이든 책이든 이곳에 모두 담는다
   <br>
    ⭐ Post Type 글의 종류 / Post: 글의 종류 중 게시글

    💬 주요 테스크 => book이라는 posttype 넣기

2. 관리자 페이지에 "책" 띄우기
    - 'functions.php': 워드프레스가 기본으로 'include'하는 php 파일
    - 'register_post_type' : 새 포스트 타입을 등록하는 함수
    - 'add_action': 특정 순간에 함수를 실행 할 수 있도록 시점과 함수를 주입하는 함수

3. 레이블을 상세하게 붙여보자
   ```php
    function mbs_register_post_type() 
   {
    ...
   }
    ```

4. 메뉴 순서 조정하기
    'menu_position' => 1
    - 5: 글 및
    - 10: 미디어 밑
    - 20: 페이지 밑
    - 25: 댓글 밑
    - 60: 첫번째 구분선 밑
    - 65: 플러그인 밑
    - 70: 사용자 밑
    - 75: 도구 밑
    - 80: 설정 밑
    - 100: 두번째 구분선 밑

5. 책 목록 만들기
   ```php
    function register_post_type('book',[
        //...
        'has_archive' => true,
   ]);
    ```
   archive.php

6. 클라이언트 책 목록 만들기
   ```php
      if( have_post() ) {
        while() {
            the_post();
            //내용 표시
        } 
   }    
   ```
   
   - have_posts: $wp_query에서 더 표시할 post가 있는지 검사.
   - the_post: template에 tag를 사용할 수 있게 $wp_query의 현재 post를 세팅.
   - template tag: WP에서 정보를 동적으로 표시할 때 쓰는 함수들

7. 헤더 불러오고 세팅하기, 액션의 개념을 익히고 활용하기
   - 헤더/푸터를 불러오기<hr/>
   get_header() hedaer.php 인클루드
   wp_head() `<head></head>` 안에 들어갈 주요 내용을 구성해 출력
   get_footer() footer.php 인클루드
   wp_footer()  footer에 필요한 것을 넣어서 준다
   <br><br>
   
   
   - wp_head 내용을 채우기<br><hr/>
   `wp_enqueue_style('handle-name',get_stylessheet_uri());`<br>
   기본 스타일시트 인클루드 <br><br>
   `add_action('wp_enqueue_scripts','function_name')`<br>
   기본 스타일시트 인클루드 함수를 등록<br><br>
   `add_action('after_setup_theme',function_name)`<br>
   기본 테마 설정 함수를 등록
   
     
12. 스타일 불러오고 테마 기본 세팅하기<br>
   두가지 '액션'
    - after_setup_theme
    - wp_enqueue_scripts<br>
    <hr/>
    코드<br>
    
    `wp_enqueue_style('handle-name',get_stylesheet_uri());`<br/>
      기본 스타일시트 포함<br/>
   `add_action('wp_enquequ_scripts','function_name');`<br/>
     기본 스타일시트 인클루드 함수를 등록
   `add_action('after_setup_theme','function_name');`<br/>
      기본 테마 설정 함수를 등록
   

13. 싱글페이지 만들기
    - 싱글페이지
    <hr/>
      - post, book(custom post type) : single.php
      - page: page.php
      - 둘다 : singular.php<br><br>

      single.php<br>
      the_title() : &nbsp;&nbsp;&nbsp; 제목을 출력<br>
      the_permalink() : &nbsp;&nbsp;&nbsp; URL을 출력 <br>
      the_author() : &nbsp;&nbsp;&nbsp; 필자를 출력 <br>
      the_content() : &nbsp;&nbsp;&nbsp; 내용을 출력 <br>
      the_date() : &nbsp;&nbsp;&nbsp; 날짜를 출력 <br>
      
      get_the_title() : &nbsp;&nbsp;&nbsp; 제목을 가져옴 <br>
      get_the_permalink() : &nbsp;&nbsp;&nbsp; URL을 가져옴 <br>
      get_the_author() : &nbsp;&nbsp;&nbsp; 필자를 가져옴 <br>
      get_the_content() : &nbsp;&nbsp;&nbsp; 내용을 가져옴 <br>
      get_the_date() : &nbsp;&nbsp;&nbsp; 날짜를 가져옴 <br><br>
         
14. 책 정보 입력 항목 만들기 1 taxonomy
    ### 기존 필드 이름 변경
    제목, 책 소개
    ### 필드 추가
    앞부제, 뒷부제, 가격, 출간일, 페이지 수, 표지 이미지, 목차

    ### 분류 추가
    저자, 변역자

    ### taxonomy(분류법) - term(용어)
    - category: post의 기본 taxonomy
    - 미분류: category taxonomy의 term<br><br>
    
    우리가 만들 custom taxomy: book-author, translator
    - taxonomy: book-author
    - term: 우석훈,프랑수아 누델만
    
    - taxonomy: translator
    - term: 이미연