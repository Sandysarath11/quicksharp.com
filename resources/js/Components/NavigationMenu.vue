<template>
    <ul role="list" class="-mx-2 space-y-1">
      <li v-for="item in navigation" :key="item.name">
        <a
          :href="item.href"
          :class="[
            item.current ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600',
            'group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold'
          ]"
        >
          <component
            :is="item.icon"
            :class="[item.current ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600', 'size-6 shrink-0']"
            aria-hidden="true"
          />
          {{ item.name }}
        </a>
      </li>
    </ul>
  </template>

  <script>
  export default {
    name: "NavigationMenu",
    props: {
      navigation: {
        type: Array,
        required: true,
        default: () => [],
      },
    },
  };
  </script>

  <style scoped>
  /* Add any scoped styles here, if needed. */
  </style>
