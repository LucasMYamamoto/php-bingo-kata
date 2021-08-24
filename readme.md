## Features 

## Playing Bingo 

### Calling Bingo Numbers
- We need to be able to call out numbers. 
- Generate Bingo cards for players. 
- Check their cards when someone calls Bingo.

### Generating Bingo Cards
- We need a Bingo card generator.
- Every Bingo card has 25 unique spaces.
- Each column contains numbers between $lowerBound and $upperBound (inclusive).
- There is 1 free space at the middle of every generated card.


| Column | Lower bound | Upper bound | 
|--------|-------------|-------------|
|   B    |      1      |     15      |
|   B    |     16      |     30      |
|   B    |     31      |     45      |
|   B    |     45      |     60      |
|   B    |     61      |     75      |

###  Checking Bingo Cards 
- We need to check player's cards when they call Bingo (so that a winner can be decided).
- When a player calls Bingo check if all numbers on his/her card have been called.
- Determine whether a player is winner or not. 