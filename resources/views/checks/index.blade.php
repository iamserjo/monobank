<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checks Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }
        .btn-primary {
            background: #1a73e8;
            color: white;
        }
        .btn-primary:hover {
            background: #185abc;
        }
        .btn-success {
            background: #28a745;
            color: white;
        }
        .btn-warning {
            background: #ffc107;
            color: black;
        }
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #333;
        }
        tr:hover {
            background-color: #f8f9fa;
        }
        .actions {
            display: flex;
            gap: 5px;
        }
        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .code {
            font-family: monospace;
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1>Checks Management</h1>
            <a href="{{ route('checkz.create') }}" class="btn btn-primary">Create New Check</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>String ID</th>
                    <th>Sender</th>
                    <th>Recipient</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>PDF UUID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($checks as $check)
                    <tr>
                        <td><span class="code">{{ $check->string_id }}</span></td>
                        <td>{{ $check->sender }}</td>
                        <td>{{ $check->recipient }}</td>
                        <td>{{ number_format($check->amount) }} ₴</td>
                        <td>{{ $check->date->format('Y-m-d H:i') }}</td>
                        <td><span class="code">{{ $check->pdf_uuid }}</span></td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('public.check', $check->string_id) }}" class="btn btn-success btn-sm" target="_blank">View</a>
                                <a href="{{ route('checkz.edit', $check) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('checkz.destroy', $check) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 40px;">No checks found. <a href="{{ route('checkz.create') }}">Create one</a></td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $checks->links() }}
        </div>
    </div>
</body>
</html>




