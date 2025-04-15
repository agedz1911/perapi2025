<div class="w-full lg:w-11/12">
    <section class="py-10 px-2 lg:px-5">
        <div class="w-full flex justify-center items-center">
            <x-section.menu-dashboard />
        </div>
        <livewire:form.submit-abstract />
    </section>
    <section class="pb-24 px-2 lg:px-5">
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th></th>
                        <th>Author</th>
                        <th>Presentation Title</th>
                        <th>Session Type</th>
                        <th>Abstract Type</th>
                        <th>File</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submitAbstracts as $abstract)
                    <!-- row 1 -->
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$abstract->user->name}} {{$abstract->user->last_name}}
                        </td>
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
                            <a href="/{{$abstract->file}}" target="_blank" class="hover:text-primary text-amber-600">File</a>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-success">Edit</button>
                            <button class="btn btn-xs btn-error">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $submitAbstracts->links() }}
        </div>
    </section>
</div>