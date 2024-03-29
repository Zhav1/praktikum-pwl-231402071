@extends('layouts.layout')

@section('contect')
{{-- content --}}
<div class="flex justify-center mt-10 flex-col gap-10">
  {{-- search bar --}}
  <label class="form-control w-full max-w-lg mx-auto">
    <div class="label">
      <span class="label-text text-black">Task Baru</span>
    </div>
    <input type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-lg border-black" />
    <div class="label">
    </div>
    {{-- button add --}}
    <button class="btn btn-success w-36 self-center bg-black text-white border-black">Add</button>
    {{-- akhir button add --}}
  </label>
  {{-- akhir search bar --}}

  {{-- task --}}
  <div class="flex flex-col gap-3 mb-10">
    {{-- task 1 --}}
    <div role="alert" class="alert max-w-4xl mx-auto">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <div class="flex flex-col">
        <span class="text-sm text-slate-400">22-03-2022</span>
        <span class="text-xl font-bold">Task 1</span>
      </div>
      <div>
        <div class="tooltip" data-tip="Detail">
          <button class="btn btn-sm shadow-lg bg-neutral-300 border-neutral-300">View</button>
        </div>
        <div class="tooltip" data-tip="Edit">
          <button class="btn btn-sm shadow-lg border-[#E8AB6A] bg-[#E8AB6A]">Edit</button>
        </div>
        <div class="tooltip" data-tip="Selesai">
          <button class="btn btn-sm btn-success bg-[#D7FAEA] border-[#D7FAEA]">Done</button>
        </div>
      </div>
    </div>
    {{-- akhir task 1 --}}
    {{-- task 2 --}}
    <div role="alert" class="alert max-w-4xl mx-auto">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <div class="flex flex-col">
        <span class="text-sm text-slate-400">22-03-2022</span>
        <span class="text-xl font-bold">Task 2</span>
      </div>
      <div>
        <div class="tooltip" data-tip="Detail">
          <button class="btn btn-sm shadow-lg bg-neutral-300 border-neutral-300">View</button>
        </div>
        <div class="tooltip" data-tip="Edit">
          <button class="btn btn-sm shadow-lg border-[#E8AB6A] bg-[#E8AB6A]">Edit</button>
        </div>
        <div class="tooltip" data-tip="Selesai">
          <button class="btn btn-sm btn-success bg-[#D7FAEA] border-[#D7FAEA]">Done</button>
        </div>
      </div>
    </div>
    {{-- akhir task 2 --}}
  </div>
  {{-- akhir task --}}
</div>
{{-- akhir content --}}
@endsection