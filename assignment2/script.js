// script.js
$(document).ready(function() {
    $("#registrationForm").on("submit", function(event) {
        event.preventDefault();

        const name = $("#name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const dob = $("#dob").val();
        const address = $("#address").val();

        if (name && email && phone && dob && address) {
            const formattedResult = `
                <h2>Registration Successful</h2>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Phone:</strong> ${phone}</p>
                <p><strong>Date of Birth:</strong> ${dob}</p>
                <p><strong>Address:</strong> ${address}</p>
            `;

            $("#result").html(formattedResult).show();
        } else {
            alert("Please fill out all fields.");
        }
    });
});
