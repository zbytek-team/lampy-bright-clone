import time

from tests.open_browser import connect_to_server
from tests.add_products import add_products
from tests.remove import remove_product
from tests.register_user import register_user
from tests.complete_order import complete_order
from tests.log_in import log_in
from tests.check_status import check_status

if __name__ == '__main__':
    localhost_browser = connect_to_server()

    add_products(localhost_browser, [12, 13], 5)

    remove_product(localhost_browser)

    register_user(localhost_browser)

    # log_in(localhost_browser)

    complete_order(localhost_browser)

    check_status(localhost_browser)

    localhost_browser.quit()
