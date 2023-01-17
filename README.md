# lampy-bright-clone

lampy-bright-clone is a clone of the [Lampy Bright](https://www.lampy-bright.pl/) website. It was created as a project for the [e-business](https://www.pja.edu.pl/en/studies/web-development) course at the [Gdańsk University of Technology](https://eti.pg.edu.pl/).

## Technologies

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Prestashop](https://www.prestashop.com/)
- [MariaDB](https://mariadb.org/)
- [Memcached](https://memcached.org/)

## Installation

1. Clone the repository

    ```bash
    git clone https://github.com/ack2406/lampy-bright-clone
    ```

2. Run docker compose
    
    ```bash
    docker-compose up
    ```

3. Open [localhost](http://localhost/) in your browser to confirm that the website is running

4. Run scrapper and import categories script

    ```bash
    cd utils
    ./get-data.sh
    ```
5. Run import products script

    ```bash
    docker exec -it {DOCKER_PRESTA_CONTAINER} php a.php
    ```
