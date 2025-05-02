@extends('layouts.app')

@section('title', 'Checkout - Skolo Institute')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h2 class="mb-4">Registration Successful!</h2>
                    <div class="alert alert-info mb-4">
                        <!-- Checkout Summary (Hidden initially) -->
            <div id="checkout-section" class="lg:w-1/3">
                <div class="checkout-summary bg-white rounded-xl shadow-md p-6 sticky top-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-shopping-cart mr-3 text-indigo-500"></i>
                        Order Summary
                    </h2>

                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <div id="selected-subjects" class="max-h-64 overflow-y-auto">
                            <p class="text-gray-500 italic">No subjects selected yet</p>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Subtotal</span>
                            <span id="subtotal" class="font-medium">E0</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Registration Fee</span>
                            <span class="font-medium">E50</span>
                        </div>
                        <div class="flex justify-between text-lg font-semibold mt-4 pt-4 border-t border-gray-200">
                            <span>Total</span>
                            <span id="total">E50</span>
                        </div>
                    </div>

                    <button id="checkout-btn" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center" onclick="processCheckout()">
                        <i class="fas fa-lock mr-2"></i> Proceed to Payment
                    </button>

                    <div class="mt-4 text-sm text-gray-500 flex items-center">
                        <i class="fas fa-shield-alt mr-2 text-indigo-400"></i>
                        Secure payment processing
                    </div>
                </div>
            </div>
                    </div>

    <!-- Payment Modal (hidden by default) -->
    <div id="payment-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Confirm Payment</h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="document.getElementById('payment-modal').classList.add('hidden')">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="mb-6">
                <p class="text-gray-600 mb-2">Total Amount Due:</p>
                <p class="text-2xl font-bold text-indigo-600" id="modal-total"></p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="1234 5678 9012 3456" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-gray-700 mb-2" for="expiry">Expiry Date</label>
                    <input type="text" id="expiry" placeholder="MM/YY" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2" for="cvv">CVV</label>
                    <input type="text" id="cvv" placeholder="123" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
            </div>

            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200" onclick="completePayment()">
                <i class="fas fa-check-circle mr-2"></i> Confirm Payment
            </button>
        </div>
    </div>
</div>
</div>
</div>
    </div>
</div>


<script>
    // Store selected subjects and their quantities
    const selectedSubjects = {};
    const subjectPrice = 150;
    const registrationFee = 50;

    // Toggle subject selection
    function toggleSubject(element, subjectName) {
        const card = element;
        const quantityControl = card.querySelector('.quantity-control');

        if (card.classList.contains('selected')) {
            // Deselect subject
            card.classList.remove('selected');
            quantityControl.classList.add('hidden');
            delete selectedSubjects[subjectName];
        } else {
            // Select subject
            card.classList.add('selected');
            quantityControl.classList.remove('hidden');
            if (!selectedSubjects[subjectName]) {
                selectedSubjects[subjectName] = 1;
                document.getElementById(`${subjectName}-qty`).textContent = '1';
            }
        }

        updateCheckoutSummary();
    }

    // Adjust quantity for a subject
    function adjustQuantity(subjectName, change) {
        const currentQty = selectedSubjects[subjectName] || 0;
        const newQty = currentQty + change;

        if (newQty > 0) {
            selectedSubjects[subjectName] = newQty;
            document.getElementById(`${subjectName}-qty`).textContent = newQty;
        } else if (newQty === 0) {
            delete selectedSubjects[subjectName];
            document.querySelector(`.subject-card[onclick*="${subjectName}"]`).classList.remove('selected');
            document.querySelector(`.subject-card[onclick*="${subjectName}"] .quantity-control`).classList.add('hidden');
        }

        updateCheckoutSummary();
    }

    // Update the checkout summary
    function updateCheckoutSummary() {
        const selectedSubjectsContainer = document.getElementById('selected-subjects');
        let subtotal = 0;

        if (Object.keys(selectedSubjects).length === 0) {
            selectedSubjectsContainer.innerHTML = '<p class="text-gray-500 italic">No subjects selected yet</p>';
        } else {
            let html = '';
            for (const [subject, qty] of Object.entries(selectedSubjects)) {
                const subjectTotal = qty * subjectPrice;
                subtotal += subjectTotal;

                html += `
                    <div class="flex justify-between items-center py-2">
                        <div>
                            <span class="font-medium">${subject}</span>
                            <span class="text-gray-500 text-sm ml-2">x${qty}</span>
                        </div>
                        <span class="font-medium">E${subjectTotal}</span>
                    </div>
                `;
            }
            selectedSubjectsContainer.innerHTML = html;
        }

        document.getElementById('subtotal').textContent = `E${subtotal}`;
        const total = subtotal + registrationFee;
        document.getElementById('total').textContent = `E${total}`;
    }

    // Validate registration and show checkout
    function validateAndShowCheckout() {
        // Validate student information
        const name = document.getElementById('name').value.trim();
        const studentId = document.getElementById('student-id').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();

        if (!name) {
            alert('Please enter your full name.');
            document.getElementById('name').focus();
            return;
        }

        if (!studentId) {
            alert('Please enter your student ID.');
            document.getElementById('student-id').focus();
            return;
        }

        if (!email) {
            alert('Please enter your email address.');
            document.getElementById('email').focus();
            return;
        } else if (!/^\S+@\S+\.\S+$/.test(email)) {
            alert('Please enter a valid email address.');
            document.getElementById('email').focus();
            return;
        }

        if (!phone) {
            alert('Please enter your phone number.');
            document.getElementById('phone').focus();
            return;
        }

        if (Object.keys(selectedSubjects).length === 0) {
            alert('Please select at least one subject.');
            return;
        }

        // Show checkout section
        document.getElementById('checkout-section').style.display = 'block';

        // Scroll to checkout section
        document.getElementById('checkout-section').scrollIntoView({ behavior: 'smooth' });
    }

    // Process checkout
    function processCheckout() {
        // Show payment modal
        document.getElementById('modal-total').textContent = document.getElementById('total').textContent;
        document.getElementById('payment-modal').classList.remove('hidden');
    }

    // Complete payment
    function completePayment() {
        // Validate payment info (simplified for demo)
        const cardNumber = document.getElementById('card-number').value.trim();
        const expiry = document.getElementById('expiry').value.trim();
        const cvv = document.getElementById('cvv').value.trim();

        if (!cardNumber || cardNumber.length < 16) {
            alert('Please enter a valid card number (16 digits).');
            document.getElementById('card-number').focus();
            return;
        }

        if (!expiry || !/^\d{2}\/\d{2}$/.test(expiry)) {
            alert('Please enter a valid expiry date (MM/YY format).');
            document.getElementById('expiry').focus();
            return;
        }

        if (!cvv || cvv.length < 3) {
            alert('Please enter a valid CVV (3 digits).');
            document.getElementById('cvv').focus();
            return;
        }

        // Simulate payment processing
        setTimeout(() => {
            document.getElementById('payment-modal').classList.add('hidden');

            // Show success message
            alert('Payment successful! Your subjects have been registered.');

            // Reset form (for demo purposes)
            resetForm();
        }, 1500);
    }

    // Reset the entire form
    function resetForm() {
        // Reset subject selection
        document.querySelectorAll('.subject-card').forEach(card => {
            card.classList.remove('selected');
            card.querySelector('.quantity-control').classList.add('hidden');
        });
        document.querySelectorAll('.quantity').forEach(el => el.textContent = '0');

        // Clear selected subjects
        for (const subject in selectedSubjects) {
            delete selectedSubjects[subject];
        }

        // Reset student info
        document.getElementById('name').value = '';
        document.getElementById('student-id').value = '';
        document.getElementById('email').value = '';
        document.getElementById('phone').value = '';

        // Reset payment info
        document.getElementById('card-number').value = '';
        document.getElementById('expiry').value = '';
        document.getElementById('cvv').value = '';

        // Hide checkout section
        document.getElementById('checkout-section').style.display = 'none';

        // Update checkout summary
        updateCheckoutSummary();
    }
</script>
@endsection