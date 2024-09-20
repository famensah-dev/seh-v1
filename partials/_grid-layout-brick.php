<!-- Services Section -->
<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, minmax(200px, 1fr)); /* Three equal columns */
    gap: 20px; /* Spacing between cards */
    padding-bottom: 220px; /* Extra space at the bottom to prevent cards from being cut off */
    width: 70%; 
    margin: 0 auto;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 0.5rem;
    height: 300px; 
    box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
    display: flex;
    font-size: 1.2em;
}

/* Staggering the cards using translation */
.card:nth-child(3n+1) {
    transform: translateY(150px); /* First card in each row is lower */
}

.card:nth-child(3n+2) {
    transform: translateY(75px); /* Second card in each row is lower */
}

.card:nth-child(3n+3) {
    transform: translateY(0px); /* Third card in each row is the lowest */
}


</style>

<div class="container mx-auto">
    <div class="grid-container">
        <div class="card">
            <div class="card-title">
                <h3>Card Title</h3>
            </div>
            <div class="card-body">
                
            </div>
        </div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div>
        <div class="card">Card 8</div>
        <div class="card">Card 9</div>
    </div>
</div>



<!-- Section End -->