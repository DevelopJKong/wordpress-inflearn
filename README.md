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