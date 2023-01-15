#!/bin/bash
python3 scrapper.py
python3 insert.py
docker exec lampy-bright-clone-presta-1 /bin/bash -c "cd back-office;php a.php"