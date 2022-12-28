# Convert your money to foreign currencies
## Which is

This is a repository created in PHP that seeks to convert money to other international currencies through the AWERSOME API,


## How to use

- To use it, you need to have PHP installed on your machine and download the dependencies (external libraries) listed in the autoload.php file, which can be installed through Composer (a dependency manager for PHP).

- The script can be run from the command line, passing two arguments that represent the currencies you want to query. For example:
-

```yerm
php script.php USD BRL
```

The script will perform the API query and display the currency quote results for the last 15 days. Each line represents a day, with date information, purchase quote (bid) and ask quote.


Output example:


```yerm
Currencies: USD -> BRL
2022-01-01 | 3.9200 | 3,9600
2022-01-02 | 3.9300 | 3,9700
2022-01-03 | 3.9400 | 3,9800
2022-01-04 | 3.9500 | 3,9900
2022-01-05 | 3.9600 | 4,0000
```
## More on how to use

To use the script, you need to pass two arguments on the command line, representing the currencies you want to query. For example:

```yerm
php consult-cotacao.php USD BRL
```

The script will display the quotation of currencies USD (US dollar) to BRL (Brazilian real) in the last 15 days.

To work correctly, the script needs some external dependencies, which must be installed before using it. To install these dependencies, just run the following command in the project root:

```yerm
composer install
```

The script also makes use of an Economy class, which you must implement. This class must have a queryLastClose function, which must query the currency quote API and return the results in an array.

```yerm
$obEconomy = new Economy;
$dataClosing = $obEconomia->consultLastClosings('USD', 'BRL', 15);
```

The script will display the quotation of the consulted currencies, formatting the values with the number_format function and displaying them on the screen.

I hope this script is useful for you! Any questions or suggestions, feel free to contact us.

----------------------------