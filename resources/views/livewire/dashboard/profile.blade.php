<div class="w-full lg:w-11/12">
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="w-full flex justify-center items-center">
            <x-section.menu-dashboard />
        </div>
        <fieldset class="fieldset w-full bg-base-100 border border-base-300 p-4 rounded-box">
            <legend class="fieldset-legend">Profile</legend>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">First Name</label>
                    <input type="text" class="input" placeholder="John" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Last Name</label>
                    <input type="text" class="input" placeholder="doe" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">NIK</label>
                    <input type="text" class="input" placeholder="NIK" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Title</label>
                    <div class="flex flex-wrap gap-2">
                        <input type="radio" name="title" class="radio radio-primary" />
                        <label class="fieldset-label">Prof.</label>

                        <input type="radio" name="title" class="radio radio-primary" />
                        <label class="fieldset-label">Dr.</label>

                        <input type="radio" name="title" class="radio radio-primary" />
                        <label class="fieldset-label">dr.</label>

                        <input type="radio" name="title" class="radio radio-primary" />
                        <label class="fieldset-label">MD.</label>

                        <input type="radio" name="title" class="radio radio-primary" />
                        <label for="">Mr.</label>
                        <input type="radio" name="title" class="radio radio-primary" />
                        <label for="">Mrs.</label>
                        <input type="radio" name="title" class="radio radio-primary" />
                        <label for="">Miss.</label>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">title Specialist</label>
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Name on Certificate</label>
                    <input type="text" class="input" placeholder="" />
                </div>
            </div>
        </fieldset>
    </section>
</div>