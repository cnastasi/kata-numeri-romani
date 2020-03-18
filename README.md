![Workout](header-image.png)

# Kata 1 - Numeri romani

Liberante tratto e riadattato da: 

https://dzone.com/articles/roman-numerals-kata-tdd-and

Autore: Giorgio Sironi

I Kata sono piccoli esercizi che, eseguendoli più volte, ci permettono di migliorare le nostre capacità tecniche. 
Si concentrano su un dettaglio alla volta, come il design di un software o a pratiche come il TDD.

In questo Kata ci concentreremo sul TDD.

Lo scopo è quello di creare un convertitore di numeri, da decimali a romani. La tabella di conversione è la seguente:

| Decimale | Romano |
|--------- | ------ |
| 1        | I      |
| 5        | V      |
| 10       | X      |
| 50       | L      |
| 100      | C      |
| 500      | D      |
| 1000     | M      |

Per ottenere i numeri intermedi, si dovranno seguiire le seguenti regole:
 
I simboli **I**, **X**, **C** e **M** possono ripetuti al massimo 3 volte. Il risultato è la somma del simbolo:

```
II = 2
XXX = 30
```

I simboli **D**, **L**, **V** non possono mai essere ripetutti.

Per ottenere numeri come 4 o 95, vale la regola sottrattiva:
```
IV = 5 - 1 = 4
XC = 100 - 10 = 90
```
Cioè si mette un simbolo più piccolo davanti ad un'altro più grande. Altrimenti, con un simbolo più piccolo alla destra 
del simbolo più grande, vale la regola additiva.
```
VI = 5 + 1 = 6
XCVI = (100 - 10) + 5 + 1 = 96
``` 
* **I** può essere sottratto solamente da **V** e **X**.
* **X** può essere sottratto solamente da **L** e **C**
* **C** può essere sottratto solamente da **D** e **M**
* **V**, **L** e **D** non possono mai essere sottratti  

Gli zeri presenti nei numeri decimali vengono considerati solo per il valore del numero ma non vengono riportati nella conversione.
```
MII = 1002
```

L'ultima specifica è che il programma potrà convertire un numero intero positivo lungo al massimo 4 cifre. 
Essendo un esercizio però, daremo per scontato che i valori di input siano sempre corretti in quanto è un dettaglio non interessante ai fini dell'esperienza.

La soluzione che verrà fuori non è detto che sia quella ottimale, ma non è importante. 
Quello che è importante è la strada che intraprenderai per arrivare alla soluzione (e quello che ti insegnerà).
