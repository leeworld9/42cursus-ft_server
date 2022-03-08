
# ft_server
- ft_server : **42cursus (2 Circle)**
   - Status : Finished
   - Completed date : 2021/01/31
   - Evaluation : <span style="color: #008000">Success</sapn>
   - Score : <span style="color: #008000">100%</sapn>

- Reference
   - https://www.44bits.io/ko/post/easy-deploy-with-docker

- Tester
  - None

- Issue
  - None

- Manual
    ```
    Image Build   : docker build -t debian:buster .
    Container Run : docker run -p 80:80 -p 443:443 -ti [IMAGE ID]

    ## How to use the terminal
    ## 1. ctrl+p -> ctrl+q
    ## 2. docker exec -it [CONTAINER ID] /bin/bash
    ```