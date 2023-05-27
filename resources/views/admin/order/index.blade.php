@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Order List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Product Quantity</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->code }}</td>
                            <td><a href="{{route('admin.user.show',['id' => $order->user_id])}}"> <i class="nav-icon fas fa-user"></i></a></td>
                            <td>{{ $order->total_price }} ₺</td>
                            <td>{{ $order->status }}
                                @if($order->status !== "COMPLETED")
                                |
                                <form action="{{ route('admin.order.update', ['id' => $order->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-success">Complete Order</button>
                                </form>
                                @endif
                            </td>
                            <td>{{ count($order->orderItems) }}</td>
                            <td>
                                <!-- Add action buttons here -->
                                <a href="{{ route('admin.order.show', ['id' => $order->id]) }}" class="btn btn-primary">View</a>
                                <form action="{{ route('admin.order.destroy', ['id' => $order->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
