# Square One Shop Project documentation

This is the documentation for the Square One Shop Project, here design choices and endpoints will be explained.
There will be a short description about how to run this code on a local machine.

## Run this project locally
Adding the project requirements:
```
composer require laravel/sanctum
composer require livewire/livewire
```

It is very likely that it will be needed to copy and paste the `.env.example` to create a new `.env` file for
the project, a `php artisan key:generate` will create the respective app key.
Also, if needed, this is to create random test SQLite dataset.
```
php artisan migrate:fresh --seed
```

To create the server on which the page will run and render everything else:
```
php artisan serve
npm run dev
```

You can also use Herd to open this project, entering `Sq1a-store.test` on a browser with Herd open.

To run the tests in this same project using the memory and not the seeded database:
```
php artisan test
```

## External APIs
The [Color API](https://www.thecolorapi.com) will be used to get color names from hex.
Or [PalettesPro](https://palettespro.com/), since it has a smaller output.

## Functionalities done per page
There is a test user with an email `test@example.com` and password `password`, for testing purposes.

### Header
- The SQ1 logo redirects to the home page.
- The search products redirects to the store filtering by product name.
- The profile icon redirects to login when logged out, otherwise, it goes to a menu to log out or see your profile (last one not supported).
- If there were a shopping cart modal, the bag icon would open it, for now it is inactive.

### Home page
- The view now button and the shop now button should redirect to the store page with the discounts category selected.
- The products should redirect to the respective product page.
- The view more button redirect to the store with the selected category active.
- The brand marquee should be working without reloading on all reasonable sizes of screen.

### Shop page
- Filtering should be fully functional by the categories shown, and they should be able to be reset.
- Column number selection should be functional and shouldn't allow a big number of columns on 
- The products, when clicked on the image or title, should redirect to the selected variant.

### Product Page
- Show stock (if it is less than 21), color and size of the selected variant, using the color as index for showing sizes and avoid nonexistent variants.
- If there is a click on the mini images, they should display in the main image.
