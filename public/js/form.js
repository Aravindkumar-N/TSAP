// document.getElementById('toggleSwitch').addEventListener('change', function() {
//     const packages = document.querySelectorAll('.package');
//     if (this.checked) {
//         // Modify as needed to show a different set of packages or adjust styling
//         packages.forEach(pkg => pkg.style.display = 'none');
//         // Show packages related to 'Hire A Designated Team'
//         // You can add another set of packages here
//     } else {
//         // Show initial packages
//         packages.forEach(pkg => pkg.style.display = 'block');
//     }
// });

function togglePricing() {
    var monthlyPricing = document.getElementById('monthlyPricing');
    var yearlyPricing = document.getElementById('yearlyPricing');
    var toggleButton = document.getElementById('toggleButton');

    if (monthlyPricing.style.display === "none") {
    monthlyPricing.style.display = "block";
    yearlyPricing.style.display = "none";
    toggleButton.innerText = "Switch to Yearly Pricing";
    } else {
    monthlyPricing.style.display = "none";
    yearlyPricing.style.display = "block";
    toggleButton.innerText = "Switch to Monthly Pricing";
    }
    }