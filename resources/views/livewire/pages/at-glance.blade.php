<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Program at Glance</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div id='calendar'></div>
        </div>
    </section>
</div>

@script
<script type="text/javascript">
    document.addEventListener('livewire:initialized', () => {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            // plugins: [timeGridPlugin],
            initialView: 'timeGridDay',
            selectable: true,
            validRange: {
                start: '2025-09-24', // Tanggal mulai
                end: '2025-09-28' // Tanggal akhir (exclusive)
            },
            slotMinTime: '07:00:00', // Jam mulai
            slotMaxTime: '19:00:00', // Jam akhir
            events: [
                {
                    title: 'Event 1', // Judul event
                    start: '2025-09-24T07:00:00', // Tanggal dan waktu mulai
                    end: '2025-09-24T09:00:00', // Tanggal dan waktu akhir
                    backgroundColor: '#ff9f00', // Warna latar belakang
                    borderColor: '#ff9f00', // Warna batas
                    textColor: '#ffffff' // Warna teks
                },
                {
                    title: 'Event 2', // Judul event
                    start: '2025-09-24T07:00:00', // Tanggal dan waktu mulai
                    end: '2025-09-24T09:00:00', // Tanggal dan waktu akhir
                    backgroundColor: '#ff0100', // Warna latar belakang
                    borderColor: '#ff0100', // Warna batas
                    textColor: '#ffffff' // Warna teks
                }
            ],
            select: function(info) {

                console.log(info);

            }
        });
        calendar.render();
    });
</script>
@endscript