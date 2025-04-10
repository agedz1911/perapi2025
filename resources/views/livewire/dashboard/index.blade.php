<div class="w-full lg:w-11/12">
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="card bg-base-100 w-full shadow-sm">
                <div class="card-body">
                    <div class="flex flex-col items-center gap-2 justify-center">
                        <div class="avatar">
                            <div class="w-16 rounded-full">
                                <img src="https://ui-avatars.com/api/?name={{$user->name}}" />
                            </div>
                        </div>
                        <span class="badge badge-xs badge-warning">{{$user->email}}</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Full Name:</td>
                                    <td>{{$user->title ?? ''}} {{$user->name}} {{$user->last_name ?? ''}}, {{$user->title_specialist ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>NIK:</td>
                                    <td>{{$user->nik ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Name on Certificate:</td>
                                    <td>{{$user->name_on_certificate ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Institution:</td>
                                    <td>{{$user->institution ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{$user->address ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td>{{$user->country ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Province:</td>
                                    <td>{{$user->province ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td>{{$user->city ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Postal Code:</td>
                                    <td>{{$user->postal_code ?? ''}}</td> 
                                </tr>
                                <tr>
                                    <td>Phone Number:</td>
                                    <td>{{$user->phone_number ?? ''}}</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        <a href="/profile" wire:navigate class="btn btn-primary btn-block">Update Profile</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="card w-full bg-base-100 shadow-sm">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>