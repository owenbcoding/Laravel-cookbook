
    <div class="flex justify-between items-center">
        <h4 class="text-gray-500 font-medium">users</h4>
        <select name="selectedDays" id="selectedDays" class="border bg-gray-100" wire:model="selectedDays" wire:change="updateStat">
            <option value="30">30 days</option>
            <option value="30">60 days</option>
            <option value="30">90 days</option>
        </select>
    </div>
    <div class="text3xl font-bold mt-4">{{ $usersCount }}</div>


