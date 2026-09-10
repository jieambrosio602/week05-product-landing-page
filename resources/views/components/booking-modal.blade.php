<div id="bookingModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
    <div class="bg-slate-800 border border-slate-700 rounded-xl p-6 max-w-md w-full relative">
        <button onclick="toggleModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white font-bold text-xl">&times;</button>
        
        <h3 class="text-2xl font-bold text-amber-500 mb-2">Book an Appointment</h3>
        <p class="text-slate-400 text-sm mb-6">Fill in your details to secure a haircut slot at Loy Paupit.</p>
        
        <form onsubmit="handleBooking(event)" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Full Name</label>
                <input type="text" id="clientName" required placeholder="Juan Dela Cruz" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-amber-500">
            </div>
            
            <div>
                <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Select Service</label>
                <select id="clientService" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-amber-500">
                    <option>Classic Haircut - ₱250</option>
                    <option>Beard Trim & Sculpt - ₱180</option>
                    <option>Full Package - ₱400</option>
                </select>
            </div>
            
            <div>
                <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Preferred Date & Time</label>
                <input type="datetime-local" id="clientDate" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-amber-500">
            </div>
            
            <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold py-3 rounded-lg transition mt-4">
                Confirm Booking
            </button>
        </form>
    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById('bookingModal');
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
    }

    function handleBooking(event) {
        event.preventDefault();
        const name = document.getElementById('clientName').value;
        const service = document.getElementById('clientService').value;
        
        alert(`Salamat, ${name}! Nareceive na namin ang booking mo para sa ${service}. See you sa shop!`);
        
        event.target.reset();
        toggleModal();
    }
</script>