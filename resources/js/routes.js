
import { AdminHome } from "./admin/AdminHome";
import { AllPosts } from "./admin/all_category";
import { AllCategories } from "./admin/all_posts";

export const routes = [
    {
        path : '/admin_home',
        component: AdminHome
    },
    {
        path : '/all_posts',
        component: AllPosts
    },
    {
        path : '/all_category',
        component: AllCategories
    },

]