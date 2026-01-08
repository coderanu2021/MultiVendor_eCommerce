@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h1 style="font-size: 24px; font-weight: 600; color: #1e293b; margin: 0;">Products Management</h1>
        <button style="background: #2563eb; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 8px;">
            <span class="material-icons" style="font-size: 20px;">add</span>
            Add Product
        </button>
    </div>

    <div style="background: white; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); padding: 24px;">
        <p style="color: #64748b;">Product list will appear here.</p>
    </div>
</div>
@endsection
