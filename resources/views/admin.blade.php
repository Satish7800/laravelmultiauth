<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl col-5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{url('addUser')}}">
                    @csrf
                <div class="card ">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input class=" form-control" type="name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="form-group">
                               <button class="btn btn-primary sm" type="submit">Register</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    
</x-app-layout>

