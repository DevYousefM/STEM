<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Country</th>
                            <th scope="col">Level</th>
                            <th scope="col">Payment ID</th>
                            <th scope="col">Course</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $count = 1; ?>
                        @foreach($payments as $i)

                            <tr>
                                <th scope="row"><?= $count; ?></th>
                                <th scope="row">{{$i->fullname}}</th>
                                <th scope="row">{{$i->email}}</th>
                                <th scope="row">{{$i->phone}}</th>
                                <th scope="row">{{$i->country}}</th>
                                <th scope="row">{{$i->level}}</th>
                                <th scope="row">{{$i->payment_id}}</th>
                                <th scope="row">{{$i->course}}</th>
                                <th scope="row">{{$i->amount}}</th>
                                <th scope="row">{{$i->updated_at}}</th>
                                <th scope="row">{{$i->status}}</th>
                            </tr>
                                <?php $count++ ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
