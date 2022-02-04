Projekt zrealizowany za pomocą frameworku Laravel.

Celem projektu było stworzenie sklepu internetowego za pomocą modelu MVC(model-view-controller). Na stronie internetowej jest możliwość obejrzenia produktów, przeczytania informacji o firmie oraz uzyskania informacji o firmie. <br>
Dopiero po zalogowaniu się bądź stworzeniu konta klient może dodać produkty do koszyka a następnie po wypełnieniu formularza zamówić produkty. <br>
Koszyk można edytować podczas robienia zakupów (zwiększyć ilość produktów bądź je usunąć).<br>
W każdej chwili klient może obejrzeć swoje poprzednie zamówienia oraz ich status w zakładce Your Orders.<br>
Projekt posiada także panel administratora. Po stworzeniu konta możemy nadać użytkownikowi uprawienia administratora, dzięki którym dostanie on dostęp do AdminPanel.<br>
W AdminPanel uzyskujemy możliwość edytowania,dodawania,usuwania oraz wyświetlania produktów jak i zamówień. Jest też możliwość wyświetlania informacji o użytkownikach oraz edytowania danych ich kont. W ten sposób możemy też nadać użytkownikowi uprawnienia administratora.

Projekt wykorzystuje bazę danych PHPmyAdmin. 

Aby uruchomić projekt należy:
1. Pobrać kod
2. Włączyć serwer Apache oraz bazę danych
3. Możesz stworzyć swoją bazę danych za pomocą komendy php artisan migrate w konsoli
4. Aby uzupełnić bazę danych losowymi danymi możesz użyc komendy php artisan db:seed
5. Zamiast tego możesz dodawać dane używając funkcjonalności strony.
6. stronę będzie można odpalić w przeglądarce w momencie gdy będac w katalogu głównym projektu wpiszemy <b>php artisan serve</b> w konsoli. 
