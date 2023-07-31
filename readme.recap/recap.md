1. Creare vista Homepage, Add new post;
2. Creare la rotta Homepage, Add new post;
3. Trasferire le funzione dalle rotte al controlle (Creazione del controlle 'php artisan make:controller NomeController');
4. Fare migrazione (comando per fare la migrazione 'php artisan migrate');
5. Creare le due collonne ('title', 'content') nel file migrazione;
6. Nella pagina Add new post, creare il form in cui inseriremo i suovi post (N.B Ricordare bene che nei form si deve inserire il tokken csrf, senza di questo il form/pagina non funzionerà, e riestituirà errore 414 expired page );
7. Creare il Model;
8. Nel file Model aggiungere il metodo fillable che serve a indicare quale campi deve considerare;
9. Nel file Add new post Controller creare un'altra funzione che andra a pushare tutte le informazione dati dall'utente nel database;
