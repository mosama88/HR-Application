<div style="display: flex; gap: 10px;">
    <a href="{{ route('dashboard.' . $name . '.edit', $id) }}" class="btn btn-actions btn-sm btn-primary" title="تعديل">
        <i class="fas fa-edit"></i>
    </a>
    <a href="{{ route('dashboard.' . $name . '.show', $id) }}" class="btn btn-actions btn-sm btn-info" title="عرض">
        <i class="fas fa-eye"></i>
    </a>
    <form action="" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-actions btn-sm btn-danger" title="حذف">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</div>
