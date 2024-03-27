# Bein Media Restaurant Backend

## Introduction
- Brief overview of the Bein Media Restaurant Backend.
- Description of the dashboard and website APIs.

## EndPoints
- Dashboard API:
  - Authentication endpoints.
  - Endpoints for managing categories, items, and discounts.
- Website API:
  - Endpoints for retrieving home data and items.

## Getting Started
1. **Installation**: 
   - Clone the repository and install dependencies. The backend is built with Laravel version 9 and requires PHP version 8.0.
     ```bash
     git clone https://github.com/ibrahimkarimeddin/bein-media-backend.git
     cd bein-media-backend
     composer install
     ```
2. **Environment Setup**: 
   - Configure environment variables.
3. **Database Setup**: 
   - Setup and configure your database.
4. **Running the Application**: 
   - Start the backend server.




## Most Features Explane 
1. Discount For Item 
 ```php 
  public function getPriceAfterDiscountAttribute()
    {

        $current_insance = $this;


        // make recursive while to get discount from  the first parent have discount
        while ($current_insance) {

            if ($current_insance->discount) {


                if($current_insance->discount->type == DiscountTypeEnum::PRECENT){
                    return (string)($this->price - (($this->price  *  $current_insance->discount->value)/100) );
                }
                return (string)($this->price  - $current_insance->discount->value);
            }
            $current_insance = $current_insance->category()->first();

            if(!isset($current_insance)){
                return $this->price;
            }
        }

        return null;

    }
```
this code are make  recursive call to get the first parent have discount 
if not will return the current price 

2. Folder Structure

 explanation of the main folders and their purposes:

- **app/Http/Controllers**: This folder contains the controllers responsible for handling incoming requests and returning responses. 
and call the action (Presentation Layer)

- **app/Actions**: Within this folder, you'll find action classes that encapsulate specific business logic related to handling requests. 
(business Logic Layer)

- **app/Repositories**: The repositories folder houses classes responsible for interacting with the data layer. Each repository typically corresponds to a specific database table or model and provides methods for CRUD operations. 
(Data Layer)


- **app/Interfaces**: This Foder  contains interface definitions for repositories.



## Contact

For any queries or support, please reach out to  ibrahimkarimeddin@gmail.com or contact us via phone at +963951968994.
