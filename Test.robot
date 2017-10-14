
*** Settings ***
Library    Selenium2Library

*** Variables ***
${BROWSER}        chrome
${FACEBOOK URL}    http://www.facebook.com

*** Testcases ***
Search google word สวัสดี
    Open Browser    ${FACEBOOK URL}    ${BROWSER}
    Input Text    id=email    xxx
    Input Text    id=pass    xxx
    Click Element    id=loginbutton
    Wait Until Page Contains    อีเมลหรือหมายเลขโทรศัพท์ที่คุณป้อนไม่ตรงกับบัญชีผู้ใช้ใดๆ สมัครใช้งานบัญชีผู้ใช้
    Close Browser