<div class="w-full lg:w-11/12">
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row gap-4">
            <div class="card bg-base-100 w-full max-w-sm shadow-sm">
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
                                    <td>{{$user->title ?? ''}} {{$user->name}} {{$user->last_name ?? ''}},
                                        {{$user->title_specialist ?? ''}}</td>
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
                    <div class="card-body">
                        <div class="flex justify-between items-end py-5">
                            <h1 class="text-lg font-semibold">List Abstract</h1>
                            <a href="/abstract-submission" wire:navigate class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Manage Abstracts</a>
                        </div>
                        @if (count($submitAbstracts) > 0 )
                        <div class="overflow-x-auto">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Presentation Title</th>
                                        <th>Session Type</th>
                                        <th>Abstract Type</th>
                                        <th>File</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($submitAbstracts as $abstract)
                                    <!-- row 1 -->
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <p>{{$abstract->presentation_title}}</p>
                                        </td>
                                        <td>
                                            @if ($abstract->session_type === 'E-Poster')
                                            <span
                                                class="badge badge-primary badge-xs">{{$abstract->session_type}}</span>
                                            @else
                                            <span class="badge badge-xs badge-info">{{$abstract->session_type}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($abstract->abstract_type === 'Free Paper')
                                            <span
                                                class="badge badge-primary badge-xs">{{$abstract->abstract_type}}</span>
                                            @else
                                            <span class="badge badge-xs badge-info">{{$abstract->abstract_type}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/{{$abstract->file}}" target="_blank" class="hover:text-primary text-amber-600">Download Abstract</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $submitAbstracts->links() }}
                        </div>
                        @else
                        <p>No Abstracts submitted yet</p>
                        @endif
                    </div>
                </div>
                <div class="card w-full bg-base-100 shadow-sm">
                    <div class="card-body">
                        <h1>Registration</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>