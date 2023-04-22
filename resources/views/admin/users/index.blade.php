<x-content>
    <x-slot name="title">Admin Users</x-slot>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">نام کاربری</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">تاریخ عضویت</th>
                    <th scope="col">آخرین بروز رسانی</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @if($users->items())
                    @foreach($users as $index => $user)
                        <tr>
                            <th>{{$users->firstItem() + $index}}</th>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a onclick="document.getElementById('delUser').submit()"
                                   class="btn btn-sm btn-danger">حذف</a>
                                {{--delete Form--}}
                                <form method="post" id="delUser"
                                      action="{{route('users.destroy' , $user->id)}}">
                                    @csrf @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{--Paginate--}}
            <div class="justify-content-center d-flex my-4">
                {{ $users->render() }}
            </div>
        </div>
    </div>


</x-content>
