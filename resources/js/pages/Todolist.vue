<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import { Button } from '@/components/ui/button';

    interface Task {
        id: number,
        description: string,
        created_at: string
    }
    
    defineProps<{
        tasks: Task[]
    }>();
</script>
<template>
    <Head title="To Do List"></Head>
    <div class="todolistActions" id="todolistActions" name="todolistActions">
            <Button type="submit"></Button>
        </div>
        <div class="todolist" id="todolist" name="todolist">
            <table>
                <thead>
                    <tr>
                        <td>Description</td>
                        <td>Criado em</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="task in tasks" :key="task.id">
                        <td>{{task.description}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</template>