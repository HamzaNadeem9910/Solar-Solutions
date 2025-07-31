function calval() {
    let dailyuse1 = parseFloat(document.getElementById('dailyuse1').value) || 0;
    let quan1 = parseFloat(document.getElementById('quan1').value) || 0;

    let dailyuse2 = parseFloat(document.getElementById('dailyuse2').value) || 0;
    let quan2 = parseFloat(document.getElementById('quan2').value) || 0;

    let dailyuse3 = parseFloat(document.getElementById('dailyuse3').value) || 0;
    let quan3 = parseFloat(document.getElementById('quan3').value) || 0;

    let dailyuse4 = parseFloat(document.getElementById('dailyuse4').value) || 0;
    let quan4 = parseFloat(document.getElementById('quan4').value) || 0;

    if ((dailyuse1 === 0 || quan1 === 0) && 
        (dailyuse2 === 0 || quan2 === 0) && 
        (dailyuse3 === 0 || quan3 === 0) && 
        (dailyuse4 === 0 || quan4 === 0)) {
        
        alert("Please enter values for at least one appliance's daily usage and quantity.");
        return;
    }

    if ((dailyuse1 > 24 || dailyuse2 > 24 || dailyuse3 > 24 || dailyuse4 > 24)) {
        alert("Please enter values for 'Daily Use' less than or equal to '24'.");
        return;       
    }

    // Define power ratings for each appliance
    let power1 = 25; // Energy Saver
    let power2 = 25; // LED TV
    let power3 = 100; // Refrigerator
    let power4 = 50; // Fan

    let totalEnergy = ((dailyuse1 * quan1 * power1) + 
                       (dailyuse2 * quan2 * power2) + 
                       (dailyuse3 * quan3 * power3) + 
                       (dailyuse4 * quan4 * power4)) / 1000;

    document.getElementById('calcVal').innerText = totalEnergy.toFixed(2) + ' kWh';

}