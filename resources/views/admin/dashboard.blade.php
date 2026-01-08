@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1 class="page-title">Dashboard Overview</h1>
    <div style="display: flex; gap: 10px;">
        <button class="btn-primary" style="background: white; color: var(--text-main); border: 1px solid var(--border-color);">
            <span class="material-icons-outlined" style="font-size: 18px;">download</span>
            Export
        </button>
        <button class="btn-primary">
            <span class="material-icons-outlined" style="font-size: 18px;">add</span>
            Create New
        </button>
    </div>
</div>

<!-- Stats Grid -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; margin-bottom: 32px;">
    <!-- Card 1 -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
            <div>
                <div style="color: var(--text-secondary); font-size: 0.875rem; font-weight: 500;">Total Revenue</div>
                <div style="font-size: 1.75rem; font-weight: 700; color: var(--text-main); margin-top: 4px;">$45,231.89</div>
            </div>
            <div style="padding: 10px; background: #eff6ff; border-radius: 8px; color: var(--accent);">
                <span class="material-icons-outlined">attach_money</span>
            </div>
        </div>
        <div style="display: flex; align-items: center; font-size: 0.875rem;">
            <span style="color: #10b981; display: flex; align-items: center; font-weight: 500; margin-right: 6px;">
                <span class="material-icons-outlined" style="font-size: 16px;">trending_up</span>
                20.1%
            </span>
            <span style="color: var(--text-secondary);">from last month</span>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
            <div>
                <div style="color: var(--text-secondary); font-size: 0.875rem; font-weight: 500;">Active Orders</div>
                <div style="font-size: 1.75rem; font-weight: 700; color: var(--text-main); margin-top: 4px;">+573</div>
            </div>
            <div style="padding: 10px; background: #f0fdf4; border-radius: 8px; color: #16a34a;">
                <span class="material-icons-outlined">shopping_cart</span>
            </div>
        </div>
        <div style="display: flex; align-items: center; font-size: 0.875rem;">
            <span style="color: #10b981; display: flex; align-items: center; font-weight: 500; margin-right: 6px;">
                <span class="material-icons-outlined" style="font-size: 16px;">trending_up</span>
                4.3%
            </span>
            <span style="color: var(--text-secondary);">from last hour</span>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
            <div>
                <div style="color: var(--text-secondary); font-size: 0.875rem; font-weight: 500;">Active Vendors</div>
                <div style="font-size: 1.75rem; font-weight: 700; color: var(--text-main); margin-top: 4px;">12</div>
            </div>
            <div style="padding: 10px; background: #fdf2f8; border-radius: 8px; color: #db2777;">
                <span class="material-icons-outlined">storefront</span>
            </div>
        </div>
        <div style="display: flex; align-items: center; font-size: 0.875rem;">
            <span style="color: #ef4444; display: flex; align-items: center; font-weight: 500; margin-right: 6px;">
                <span class="material-icons-outlined" style="font-size: 16px;">trending_down</span>
                -2
            </span>
            <span style="color: var(--text-secondary);">new applications</span>
        </div>
    </div>

     <!-- Card 4 -->
     <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
            <div>
                <div style="color: var(--text-secondary); font-size: 0.875rem; font-weight: 500;">Products</div>
                <div style="font-size: 1.75rem; font-weight: 700; color: var(--text-main); margin-top: 4px;">1,420</div>
            </div>
            <div style="padding: 10px; background: #fff7ed; border-radius: 8px; color: #ea580c;">
                <span class="material-icons-outlined">inventory_2</span>
            </div>
        </div>
        <div style="display: flex; align-items: center; font-size: 0.875rem;">
            <span style="color: #10b981; display: flex; align-items: center; font-weight: 500; margin-right: 6px;">
                <span class="material-icons-outlined" style="font-size: 16px;">trending_up</span>
                12
            </span>
            <span style="color: var(--text-secondary);">added today</span>
        </div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
    <!-- Table Section -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin: 0;">Recent Transactions</h3>
            <a href="#" style="font-size: 0.875rem; color: var(--accent); font-weight: 500;">View All</a>
        </div>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; min-width: 600px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="text-align: left; padding: 12px 16px; font-size: 0.75rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600;">Order ID</th>
                        <th style="text-align: left; padding: 12px 16px; font-size: 0.75rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600;">Customer</th>
                        <th style="text-align: left; padding: 12px 16px; font-size: 0.75rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600;">Date</th>
                        <th style="text-align: left; padding: 12px 16px; font-size: 0.75rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600;">Amount</th>
                        <th style="text-align: left; padding: 12px 16px; font-size: 0.75rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 16px; font-weight: 500; font-size: 0.9rem;">#SK2548</td>
                        <td style="padding: 16px; display: flex; align-items: center; gap: 10px;">
                            <div style="width: 32px; height: 32px; background: #e0e7ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 600; color: var(--accent);">JD</div>
                            <span style="font-size: 0.9rem; font-weight: 500;">John Doe</span>
                        </td>
                         <td style="padding: 16px; font-size: 0.9rem; color: var(--text-secondary);">Oct 24, 2024</td>
                        <td style="padding: 16px; font-size: 0.9rem; font-weight: 500;">$124.99</td>
                        <td style="padding: 16px;">
                            <span style="background: #ecfccb; color: #4d7c0f; padding: 4px 10px; border-radius: 99px; font-size: 0.75rem; font-weight: 600;">Paid</span>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 16px; font-weight: 500; font-size: 0.9rem;">#SK2549</td>
                        <td style="padding: 16px; display: flex; align-items: center; gap: 10px;">
                            <div style="width: 32px; height: 32px; background: #fce7f3; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 600; color: #db2777;">AS</div>
                            <span style="font-size: 0.9rem; font-weight: 500;">Alice Smith</span>
                        </td>
                         <td style="padding: 16px; font-size: 0.9rem; color: var(--text-secondary);">Oct 24, 2024</td>
                        <td style="padding: 16px; font-size: 0.9rem; font-weight: 500;">$55.00</td>
                        <td style="padding: 16px;">
                            <span style="background: #fef9c3; color: #a16207; padding: 4px 10px; border-radius: 99px; font-size: 0.75rem; font-weight: 600;">Pending</span>
                        </td>
                    </tr>
                     <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 16px; font-weight: 500; font-size: 0.9rem;">#SK2550</td>
                        <td style="padding: 16px; display: flex; align-items: center; gap: 10px;">
                            <div style="width: 32px; height: 32px; background: #ffedd5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 600; color: #c2410c;">RB</div>
                            <span style="font-size: 0.9rem; font-weight: 500;">Robert Brown</span>
                        </td>
                         <td style="padding: 16px; font-size: 0.9rem; color: var(--text-secondary);">Oct 23, 2024</td>
                        <td style="padding: 16px; font-size: 0.9rem; font-weight: 500;">$850.00</td>
                        <td style="padding: 16px;">
                            <span style="background: #ecfccb; color: #4d7c0f; padding: 4px 10px; border-radius: 99px; font-size: 0.75rem; font-weight: 600;">Paid</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Side Widgets -->
     <div style="display: flex; flex-direction: column; gap: 24px;">
        <div class="card" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: white; border: none;">
            <div style="margin-bottom: 16px; font-size: 1.125rem; font-weight: 600;">Upgrade to Pro</div>
            <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.5; margin-bottom: 24px;">Unlock advanced analytics, custom reports, and premium support for your store.</p>
            <button class="btn-primary" style="background: #3b82f6; width: 100%; justify-content: center;">Upgrade Now</button>
        </div>
        
        <div class="card">
            <h3 style="font-size: 1rem; font-weight: 600; margin: 0 0 16px 0;">Top Locations</h3>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.9rem; font-weight: 500;">
                        <span style="font-size: 18px;">🇺🇸</span> United States
                    </div>
                    <div style="font-weight: 600; font-size: 0.9rem;">$24,000</div>
                </div>
                 <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.9rem; font-weight: 500;">
                        <span style="font-size: 18px;">🇬🇧</span> United Kingdom
                    </div>
                    <div style="font-weight: 600; font-size: 0.9rem;">$12,500</div>
                </div>
                 <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.9rem; font-weight: 500;">
                        <span style="font-size: 18px;">🇨🇦</span> Canada
                    </div>
                    <div style="font-weight: 600; font-size: 0.9rem;">$8,200</div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
